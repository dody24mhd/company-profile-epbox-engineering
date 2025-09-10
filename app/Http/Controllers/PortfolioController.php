<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function index(){ $projects = Project::latest()->paginate(12); return view('site.pages.portfolio.index', compact('projects')); }
    public function show(Project $project){ return view('site.pages.portfolio.show', compact('project')); }
}


