<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::where('status', 'published');

        // Filter by category if provided
        $category = $request->get('category', 'all');
        if ($category && $category !== 'all') {
            $query->where('categories', $category);
        }

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $projects = $query->latest()->get();

        // Get unique project categories for filter buttons
        $projectCategories = Project::where('status', 'published')
            ->select('categories')
            ->distinct()
            ->pluck('categories')
            ->filter()
            ->values();

        return view('site.pages.portfolio.index', compact('projects', 'projectCategories', 'category'));
    }
}
