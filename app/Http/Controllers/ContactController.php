<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\CustomerConfirmationMail;
use App\Mail\AdminNotificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Honeypot: if filled, treat as spam
        if ($request->filled('website')) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully. We\'ll get back to you within 24 hours.'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'message' => 'required|string',
            'recaptcha_token' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Verify reCAPTCHA v3 if configured
            $siteSecret = config('services.recaptcha.secret_key');
            if ($siteSecret && $request->filled('recaptcha_token')) {
                $ip = $this->clientIp($request);
                $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => $siteSecret,
                    'response' => $request->input('recaptcha_token'),
                    'remoteip' => $ip,
                ]);
                $data = $response->json();
                $minScore = (float) config('services.recaptcha.min_score', 0.5);
                if (!($data['success'] ?? false) || ($data['action'] ?? 'contact') !== 'contact' || ($data['score'] ?? 0) < $minScore) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.'
                    ], 422);
                }
            }

            // Per-IP limit: 1 submission per 3 months
            $ip = $this->clientIp($request);
            $cacheKey = 'contact:ip:' . $ip;
            // Quick cache check
            if (Cache::has($cacheKey)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Maaf, Anda sudah mengirim dalam 3 bulan terakhir. Silakan coba lagi nanti.'
                ], 429);
            }
            // DB check to be robust across cache clears
            $lastByIp = Contact::where('ip_address', $ip)->latest('created_at')->first();
            if ($lastByIp && $lastByIp->created_at && $lastByIp->created_at->greaterThan(now()->subDays(90))) {
                // Optionally set cache for the remaining cooldown period
                $expiresAt = $lastByIp->created_at->copy()->addDays(90);
                Cache::put($cacheKey, $expiresAt->toIso8601String(), $expiresAt);
                return response()->json([
                    'success' => false,
                    'message' => 'Maaf, Anda sudah mengirim dalam 3 bulan terakhir. Silakan coba lagi nanti.'
                ], 429);
            }
            // Create contact record
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'ip_address' => $ip,
                'company' => $request->company,
                'phone' => $request->phone,
                'message' => $request->message,
                'status' => 'unread',
            ]);

            // Prepare contact data for emails
            $contactData = [
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->phone,
                'message' => $request->message,
            ];

            // Queue confirmation email to customer
            Mail::to($contactData['email'])->queue(new CustomerConfirmationMail($contactData));

            // Queue notification email to admin/sales team
            Mail::to('sales@epbox-engg.com')->queue(new AdminNotificationMail($contactData));

            // Set IP cooldown for 3 months (approx. 90 days)
            Cache::put($cacheKey, now()->toIso8601String(), now()->addDays(90));

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully. We\'ll get back to you within 24 hours.'
            ]);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Contact form submission error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }

    private function clientIp(Request $request): string
    {
        // Prefer Cloudflare header if present, fallback to X-Forwarded-For, then request->ip
        $cf = $request->header('CF-Connecting-IP');
        if ($cf) return $cf;
        $xff = $request->header('X-Forwarded-For');
        if ($xff) {
            // XFF may contain a list: take the first client IP
            $parts = explode(',', $xff);
            return trim($parts[0]);
        }
        return $request->ip();
    }
}
