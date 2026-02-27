@extends('site.layouts.app')

@section('title', 'News & Updates | EPBOX ENGINEERING PTE. LTD')

@section('content')
<!-- Hero Section -->
<section class="blog-hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 gradient-bg relative overflow-hidden fade-section">
    <div class="interactive-bg">
        <div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
        <div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
        <div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
    </div>

    <!-- Particles Canvas Layer for Blog Hero -->
    <canvas id="blogParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">
        Your browser doesn't support Canvas.
    </canvas>
    <div class="max-w-7xl mx-auto relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">NEWS & <span class="text-blue-300">UPDATES</span></h1>
        <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Stay updated with our latest projects, partnerships, achievements, and industry insights from EPBOX ENGINEERING</p>
    </div>
</section>

<!-- News Section -->
<section class="py-12 px-4 sm:px-6 relative overflow-hidden fade-section">
    <!-- Canvas Background -->
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none"
        style="z-index:0; opacity:0.5;"></canvas>
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500  blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500  blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400  blur-2xl animate-pulse delay-500"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 section-title"
                style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">LATEST NEWS</h2>
            <div class="w-32 h-1 bg-white mx-auto mb-4"></div>
            <p class="text-gray-300 max-w-2xl mx-auto">Discover our latest achievements, project updates, and industry insights</p>
        </div>

        <!-- Search and Filter -->
        <div class="mb-12">
            <div class="flex flex-col md:flex-row gap-4 max-w-4xl mx-auto">
                <!-- Search Input -->
                <div class="flex-1">
                    <div class="relative">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="blog-search" placeholder="Search news and updates..."
                            class="w-full pl-12 pr-4 py-4 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:outline-none transition-all duration-300">
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="md:w-64">
                    <div class="relative">
                        <select id="category-filter"
                            class="w-full pl-12 pr-10 py-4 bg-gray-800 border border-gray-600 rounded-lg text-white focus:border-blue-500 focus:outline-none transition-all duration-300 appearance-none cursor-pointer">
                            <option value="all">All Categories</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }} ({{ $category->blogs_count }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Grid -->
        <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($blogs as $blog)
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-xl overflow-hidden hover:border-blue-400/40 transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/20 blog-card transform hover:-translate-y-2 h-full flex flex-col"
                data-title="{{ strtolower($blog->title) }}" data-content="{{ strtolower($blog->content) }}"
                data-category="{{ $blog->category ? strtolower($blog->category->name) : '' }}">
                <div class="relative h-56 overflow-hidden">
                    @if($blog->image_url)
                    <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                        loading="lazy">
                    @else
                    <div
                        class="w-full h-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                        <i class="fas fa-newspaper text-4xl text-blue-300"></i>
                    </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        @if($blog->category)
                        <span class="bg-blue-600 px-3 py-1 text-xs font-semibold rounded-full">{{ $blog->category->name }}</span>
                        @else
                        <span class="bg-gray-600 px-3 py-1 text-xs font-semibold rounded-full">News</span>
                        @endif
                    </div>
                    @if($blog->is_featured)
                    <div class="absolute top-4 right-4">
                        <span class="bg-yellow-600 px-3 py-1 text-xs font-semibold rounded-full">Featured</span>
                    </div>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-calendar-alt text-blue-400 mr-2"></i>
                        <span class="text-gray-400 text-sm">{{ 
                            $blog->published_at ? 
                                \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') : 
                                ($blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A')
                            }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-300 transition-colors line-clamp-2 blog-card-title">
                        {{ $blog->title }}
                    </h3>
                    <p class="text-gray-300 text-sm mb-6 line-clamp-3 leading-relaxed blog-card-excerpt">
                        {{ $blog->excerpt }}
                    </p>
                    <div class="mt-auto flex items-center justify-between">
                        <a href="{{ route('blog.show', $blog->id) }}"
                            class="inline-flex items-center gap-2 text-blue-400 text-sm font-medium hover:text-blue-300 transition-colors group-hover:gap-3">
                            <span>Read More</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock text-gray-500 text-xs"></i>
                            <span class="text-gray-500 text-xs">{{ $blog->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="bg-gradient-to-r from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-lg p-8">
                    <i class="fas fa-newspaper text-6xl text-blue-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-white mb-2">No News Available</h3>
                    <p class="text-gray-300">Check back later for the latest updates from EPBOX Engineering.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($blogs->hasPages())
        <div class="mt-8">
            {{ $blogs->links() }}
        </div>
        @endif
    </div>
</section>

@endsection

@include('site.components.chatbot')

@push('styles')
<style>
    /* News Cards Styling */
    .news-card {
        transition: all 0.3s ease;
    }

    /* Ensure uniform card heights and aligned CTA row */
    .blog-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    /* Approximate two lines for text-xl (line-height ~1.75rem) */
    .blog-card-title {
        min-height: 3.5rem; /* 2 * 1.75rem */
    }
    /* Approximate three lines for text-sm with relaxed leading (~1.5rem) */
    .blog-card-excerpt {
        min-height: 4.5rem; /* 3 * 1.5rem */
    }

    .news-card:hover {
        transform: translateY(-5px);
    }

    /* Category Badge Colors */
    .bg-blue-600 {
        background-color: #2563eb;
    }

    .bg-green-600 {
        background-color: #16a34a;
    }

    .bg-purple-600 {
        background-color: #9333ea;
    }

    .bg-orange-600 {
        background-color: #ea580c;
    }

    /* Hover Effects */
    .group:hover .group-hover\:text-blue-300 {
        color: #93c5fd;
    }

    .group:hover .group-hover\:scale-105 {
        transform: scale(1.05);
    }

    .group:hover .group-hover\:translate-x-1 {
        transform: translateX(0.25rem);
    }

    /* Gradient Background */
    .gradient-bg {
        background: linear-gradient(135deg, #0f1c3f 0%, #1e3a8a 100%);
    }

    /* Canvas Animation */
    .x-canvas-net {
        background-image:
            linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: canvasMove 20s linear infinite;
    }

    @keyframes canvasMove {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(50px, 50px);
        }
    }

    /* Fade Section Animation */
    .fade-section {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .fade-section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Interactive Background Elements */
    .interactive-bg {
        position: absolute;
        inset: 0;
        pointer-events: none;
    }

    .interactive-bg>div {
        position: absolute;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) scale(1);
        }

        50% {
            transform: translateY(-20px) scale(1.1);
        }
    }

    /* Floating Orbs */
    .floating-orb {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.2) 0%, transparent 70%);
        animation: floatOrb 8s ease-in-out infinite;
        pointer-events: none;
    }

    .floating-orb.orb1 {
        width: 80px;
        height: 80px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-orb.orb2 {
        width: 120px;
        height: 120px;
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }

    .floating-orb.orb3 {
        width: 60px;
        height: 60px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }

    @keyframes floatOrb {

        0%,
        100% {
            transform: translateY(0px) translateX(0px) scale(1);
        }

        25% {
            transform: translateY(-30px) translateX(10px) scale(1.1);
        }

        50% {
            transform: translateY(-20px) translateX(-10px) scale(0.9);
        }

        75% {
            transform: translateY(-40px) translateX(5px) scale(1.05);
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Fade section animation
document.addEventListener('DOMContentLoaded', function() {
    const fadeSections = document.querySelectorAll('.fade-section');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });
    
    fadeSections.forEach(section => {
        observer.observe(section);
    });
    
    // Blog search and filter functionality
    const searchInput = document.getElementById('blog-search');
    const categoryFilter = document.getElementById('category-filter');
    const blogCards = document.querySelectorAll('.blog-card');
    
    function filterBlogs() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value.toLowerCase();
        
        blogCards.forEach(card => {
            const title = card.dataset.title || '';
            const content = card.dataset.content || '';
            const category = card.dataset.category || '';
            
            const matchesSearch = searchTerm === '' || 
                title.includes(searchTerm) || 
                content.includes(searchTerm);
            
            const matchesCategory = selectedCategory === 'all' || 
                category.includes(selectedCategory);
            
            if (matchesSearch && matchesCategory) {
                card.style.display = 'block';
                card.style.animation = 'fadeIn 0.3s ease-in-out';
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    // Add event listeners
    if (searchInput) {
        searchInput.addEventListener('input', filterBlogs);
    }
    
    if (categoryFilter) {
        categoryFilter.addEventListener('change', filterBlogs);
    }
    
    // Add fadeIn animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);

    // Simple search and filter functionality
    const searchInput = document.getElementById('blog-search');
    const categoryFilter = document.getElementById('category-filter');
    const blogCards = document.querySelectorAll('.blog-card');

    function filterBlogs() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value.toLowerCase();

        blogCards.forEach(card => {
            const title = card.getAttribute('data-title');
            const content = card.getAttribute('data-content');
            const cardCategory = card.getAttribute('data-category').toLowerCase();

            const matchesSearch = title.includes(searchTerm) || content.includes(searchTerm);
            const matchesCategory = selectedCategory === 'all' || cardCategory === selectedCategory;

            if (matchesSearch && matchesCategory) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterBlogs);
    categoryFilter.addEventListener('change', filterBlogs);
});
</script>
@endpush