<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Get website views count from file storage
     */
    private function getWebsiteViews(): int
    {
        $filePath = 'website_views.json';

        if (Storage::disk('local')->exists($filePath)) {
            $content = Storage::disk('local')->get($filePath);
            $data = json_decode($content, true);
            return $data['views'] ?? 0;
        }

        return 0;
    }

    /**
     * Increment website views count
     */
    private function incrementWebsiteViews(): int
    {
        $filePath = 'website_views.json';
        $currentViews = $this->getWebsiteViews();
        $newViews = $currentViews + 1;

        Storage::disk('local')->put($filePath, json_encode([
            'views' => $newViews,
            'updated_at' => now()->toDateTimeString()
        ]));

        return $newViews;
    }

    public function home()
    {
        // Increment views setiap kali home page diakses
        $this->incrementWebsiteViews();

        $testimonials = Testimonial::latest()->limit(3)->get();
        return view('site.pages.home', compact('testimonials'));
    }

    public function about()
    {
        // Get views count untuk ditampilkan di about page
        $websiteViews = $this->getWebsiteViews();
        return view('site.pages.about', compact('websiteViews'));
    }
    public function services()
    {
        $testimonials = Testimonial::inRandomOrder()->get();
        return view('site.pages.services', compact('testimonials'));
    }
    public function industries()
    {
        return view('site.pages.industries');
    }
    public function oilGas()
    {
        return view('site.pages.oil-gas');
    }
    public function contact()
    {
        return view('site.pages.contact');
    }
    public function blog()
    {
        return view('site.pages.blog');
    }
}
