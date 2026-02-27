<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Response $response */
        $response = $next($request);

        $csp = env('CSP', "default-src 'self'; img-src 'self' data: https:; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' fonts.googleapis.com; font-src 'self' fonts.gstatic.com");

        $headers = [
            'X-Frame-Options' => 'SAMEORIGIN',
            'X-Content-Type-Options' => 'nosniff',
            'Referrer-Policy' => 'strict-origin-when-cross-origin',
            'Permissions-Policy' => "geolocation=(), microphone=(), camera=()",
            'Content-Security-Policy' => $csp,
        ];

        // Add HSTS only on HTTPS
        if ($request->isSecure()) {
            $headers['Strict-Transport-Security'] = 'max-age=31536000; includeSubDomains; preload';
        }

        foreach ($headers as $name => $value) {
            if (!$response->headers->has($name)) {
                $response->headers->set($name, $value);
            }
        }

        return $response;
    }
}
