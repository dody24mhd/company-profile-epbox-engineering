<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::published()->with('category');

        // Filter by category if provided
        $category = $request->get('category', 'all');
        if ($category && $category !== 'all') {
            $query->byCategory($category);
        }

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('client', 'like', "%{$search}%");
            });
        }

        $projects = $query->latest()->paginate(12);

        // Get all categories for filter dropdown
        $categories = Category::active()->get();

        // Get unique project categories for filter buttons
        $projectCategories = Project::published()
            ->select('categories')
            ->distinct()
            ->pluck('categories')
            ->filter()
            ->values();

        return view('site.pages.portfolio.index', compact('projects', 'categories', 'projectCategories', 'category'));
    }

    public function show(Project $project)
    {
        // Get related projects (same category)
        $relatedProjects = Project::published()
            ->where('id', '!=', $project->id)
            ->where('categories', $project->categories)
            ->limit(3)
            ->get();

        return view('site.pages.portfolio.show', compact('project', 'relatedProjects'));
    }
}
