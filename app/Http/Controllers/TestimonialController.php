<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        $query = Testimonial::query();

        // Filter by category if provided
        $category = $request->get('category', 'all');
        if ($category && $category !== 'all') {
            $query->where('categories', $category);
        }

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $testimonials = $query->latest()->get();

        // Get unique testimonial categories for filter
        $testimonialCategories = Testimonial::select('categories')
            ->distinct()
            ->pluck('categories')
            ->filter()
            ->values();

        return view('site.pages.testimonials.index', compact('testimonials', 'testimonialCategories', 'category'));
    }

    public function getTestimonialsForHome()
    {
        // Get all testimonials for home page
        return Testimonial::inRandomOrder()->get();
    }
}
