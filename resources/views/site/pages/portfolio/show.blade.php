@extends('site.layouts.app')
@section('title', $project->title . ' | Epbox Engineering')
@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex items-center gap-2 mb-4">
          <a href="{{ route('site.portfolio.index') }}" class="text-blue-300 hover:text-blue-400 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>Back to Portfolio
          </a>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $project->title }}</h1>
        <div class="flex items-center gap-4 mb-6">
          <span class="bg-blue-600 px-4 py-2 rounded-full text-sm">
            {{ ucfirst(str_replace('-', ' ', $project->categories)) }}
          </span>
          @if($project->year)
            <span class="text-blue-300 text-sm">{{ $project->year }}</span>
          @endif
        </div>
        @if($project->client)
          <p class="text-gray-300 mb-6">
            <span class="text-blue-400 font-medium">Client:</span> {{ $project->client }}
          </p>
        @endif
      </div>
      <div class="relative">
        <img src="{{ $project->img ? asset('storage/' . $project->img) : asset('img/img_asset/control panel4.jpg') }}" 
             alt="{{ $project->title }}" 
             class="w-full h-80 object-cover rounded-lg shadow-2xl">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
      </div>
    </div>
  </div>
</section>

<!-- Project Details -->
<section class="py-20 px-6 bg-[#0A1128] fade-section">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-3 gap-12">
      <!-- Main Content -->
      <div class="lg:col-span-2">
        <h2 class="text-3xl font-bold mb-6 text-blue-300">Project Overview</h2>
        <div class="prose prose-invert max-w-none">
          {!! nl2br(e($project->description)) !!}
        </div>
        
        @if($project->technologies && count($project->technologies) > 0)
          <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4 text-blue-300">Technologies Used</h3>
            <div class="flex flex-wrap gap-3">
              @foreach($project->technologies as $tech)
                <span class="tech-tag px-4 py-2 rounded-lg text-sm">{{ $tech }}</span>
              @endforeach
            </div>
          </div>
        @endif
      </div>
      
      <!-- Sidebar -->
      <div class="lg:col-span-1">
        <div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700">
          <h3 class="text-xl font-semibold mb-6 text-blue-300">Project Details</h3>
          
          <div class="space-y-4">
            <div>
              <span class="text-gray-400 text-sm">Category</span>
              <p class="text-white">{{ ucfirst(str_replace('-', ' ', $project->categories)) }}</p>
            </div>
            
            @if($project->year)
              <div>
                <span class="text-gray-400 text-sm">Year Completed</span>
                <p class="text-white">{{ $project->year }}</p>
              </div>
            @endif
            
            @if($project->client)
              <div>
                <span class="text-gray-400 text-sm">Client</span>
                <p class="text-white">{{ $project->client }}</p>
              </div>
            @endif
            
            <div>
              <span class="text-gray-400 text-sm">Date Added</span>
              <p class="text-white">{{ $project->created_at->format('M d, Y') }}</p>
            </div>
          </div>
          
          <div class="mt-8 pt-6 border-t border-gray-700">
            <a href="{{ route('site.contact') }}" 
               class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors text-center block">
              Get Similar Project Quote
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Related Projects -->
@if($relatedProjects->count() > 0)
  <section class="py-20 px-6 gradient-bg fade-section">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300">Related Projects</h2>
        <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
        <p class="text-gray-300 max-w-2xl mx-auto">Explore more projects in the same category</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($relatedProjects as $relatedProject)
          <div class="project-card rounded-lg overflow-hidden group">
            <div class="relative overflow-hidden">
              <img src="{{ $relatedProject->img ? asset('storage/' . $relatedProject->img) : asset('img/img_asset/control panel4.jpg') }}" 
                   alt="{{ $relatedProject->title }}" 
                   class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <div class="absolute bottom-4 left-4">
                <span class="bg-blue-600 px-3 py-1 rounded-full text-xs">
                  {{ ucfirst(str_replace('-', ' ', $relatedProject->categories)) }}
                </span>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-300 transition-colors">
                <a href="{{ route('site.portfolio.show', $relatedProject) }}">{{ $relatedProject->title }}</a>
              </h3>
              <p class="text-gray-300 text-sm mb-4">
                {{ Str::limit($relatedProject->description, 100) }}
              </p>
              <div class="flex justify-between items-center">
                @if($relatedProject->year)
                  <span class="text-blue-400 text-sm">{{ $relatedProject->year }}</span>
                @else
                  <span class="text-blue-400 text-sm">{{ $relatedProject->created_at->format('M Y') }}</span>
                @endif
                <a href="{{ route('site.portfolio.show', $relatedProject) }}" 
                   class="text-blue-400 hover:text-blue-300 text-sm font-medium">
                  View Details <i class="fas fa-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endif

<!-- CTA Section -->
<section class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Interested in This Project?</h2>
    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Let's discuss how we can help bring your industrial automation vision to life with similar solutions.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Get Free Consultation</a>
      <a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">View All Projects</a>
    </div>
  </div>
</section>

@endsection

