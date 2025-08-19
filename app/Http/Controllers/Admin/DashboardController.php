<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $recentBlogs = Blog::query()->latest()->limit(5)->get();
        $recentProjects = Project::query()->latest()->limit(5)->get();
        $recentTestimonials = Testimonial::query()->latest()->limit(5)->get();
        $recentContacts = Contact::query()->latest()->limit(5)->get();

        return view('admin.dashboard', compact(
            'recentBlogs',
            'recentProjects',
            'recentTestimonials',
            'recentContacts'
        ));
    }
}
