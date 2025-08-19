<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    // Display a listing of the testimonials
    public function index()
    {
        // Fetch all testimonials
        $testimonials = Testimonial::all();

        // Return view with testimonials
        return view('admin.testimonials.index', compact('testimonials'));
    }

    // Show the form for creating a new testimonial
    public function create()
    {
        return view('admin.testimonials.create');
    }

    // Store a newly created testimonial in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    // Show the form for editing the specified testimonial
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    // Update the specified testimonial in storage
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    // Remove the specified testimonial from storage
    public function destroy(Testimonial $testimonial)
    {
        // Delete the testimonial
        $testimonial->delete();

        // Redirect to testimonials index
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
