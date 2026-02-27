<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'categories' => 'required|string',
            'status' => 'required|in:published,draft',
            'is_featured' => 'boolean',
        ]);

        // Set defaults
        $validated['status'] = $validated['status'] ?? 'published';
        $validated['is_featured'] = $validated['is_featured'] ?? false;

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'categories' => 'required|string',
            'status' => 'required|in:published,draft',
            'is_featured' => 'boolean',
        ]);

        // Set defaults
        $validated['status'] = $validated['status'] ?? 'published';
        $validated['is_featured'] = $validated['is_featured'] ?? false;

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}