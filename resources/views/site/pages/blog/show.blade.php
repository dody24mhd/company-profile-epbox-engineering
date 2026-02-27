@extends('site.layouts.app')

@section('title', $blog->title . ' | EPBOX ENGINEERING PTE. LTD')
@section('meta_description', $blog->excerpt ?? Str::limit(strip_tags($blog->content), 160))
@section('meta_keywords', $blog->tags ?? 'EPBOX Engineering, industrial automation, control panels, news')
@section('og_type', 'article')
@section('og_image', $blog->image_url ? url($blog->image_url) : url(asset('img/logo2.png')))
@section('twitter_image', $blog->image_url ? url($blog->image_url) : url(asset('img/logo2.png')))

@push('head')
<!-- Structured Data - Article -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $blog->title }}",
    "description": "{{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 200) }}",
    "image": "{{ $blog->image_url ? url($blog->image_url) : url(asset('img/logo2.png')) }}",
    "datePublished": "{{ $blog->published_at ?? $blog->created_at }}",
    "dateModified": "{{ $blog->updated_at }}",
    "author": {
        "@type": "Organization",
        "name": "EPBOX ENGINEERING PTE. LTD"
    },
    "publisher": {
        "@type": "Organization",
        "name": "EPBOX ENGINEERING PTE. LTD",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ url(asset('img/logo2.png')) }}"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    }
    @if($blog->category),
    "articleSection": "{{ $blog->category->name }}"
    @endif
}
</script>

<!-- Structured Data - Breadcrumb -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "News & Updates",
            "item": "{{ route('blog.index') }}"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "{{ $blog->title }}",
            "item": "{{ url()->current() }}"
        }
    ]
}
</script>
@endpush

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
        <div class="mb-4">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 transition-colors">
                <i class="fas fa-arrow-left"></i>
                <span>Back to News</span>
            </a>
        </div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">{{ $blog->title }}</h1>
        <div class="w-24 sm:w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-4 sm:mb-6"></div>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-gray-300">
            <div class="flex items-center gap-2">
                <i class="fas fa-calendar-alt text-blue-400"></i>
                <span>{{ 
                    $blog->published_at ? 
                        \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') : 
                        ($blog->created_at ? $blog->created_at->format('F d, Y') : 'N/A')
                    }}</span>
            </div>
            @if($blog->category)
            <div class="flex items-center gap-2">
                <i class="fas fa-tag text-blue-400"></i>
                <span>{{ $blog->category->name }}</span>
            </div>
            @endif
            @if($blog->author)
            <div class="flex items-center gap-2">
                <i class="fas fa-user text-blue-400"></i>
                <span>{{ $blog->author }}</span>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Blog Content Section -->
<section class="py-12 sm:py-20 px-4 sm:px-6 relative overflow-hidden fade-section">
    <!-- Canvas Background -->
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500  blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500  blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400  blur-2xl animate-pulse delay-500"></div>
    </div>

    <div class="max-w-4xl mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <article class="bg-gradient-to-br from-blue-900/20 to-blue-800/10 border-2 border-blue-400/30 rounded-xl overflow-hidden">
                    @if($blog->image_url)
                    <div class="relative h-64 sm:h-80 overflow-hidden">
                        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    @endif
                    
                    <div class="p-8">
                        <!-- Excerpt/Summary -->
                        @if($blog->excerpt)
                        <div class="mb-8 p-6 bg-blue-900/10 border-l-4 border-blue-400 rounded-r-lg">
                            <h3 class="text-lg font-semibold text-blue-300 mb-3">Summary</h3>
                            <p class="text-gray-300 leading-relaxed">{{ $blog->excerpt }}</p>
                        </div>
                        @endif

                        <!-- Main Content -->
                        <div class="prose prose-invert max-w-none">
                            {!! $blog->content !!}
                        </div>
                        
                        <!-- Tags Section -->
                        @if($blog->tags)
                        <div class="mt-8 pt-6 border-t-2 border-blue-400/30">
                            <h4 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
                                <i class="fas fa-tags text-blue-400"></i>
                                Tags
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach(explode(',', $blog->tags) as $tag)
                                <span class="bg-blue-600/20 text-blue-300 px-3 py-1 rounded-full text-sm border-2 border-blue-400/40 hover:bg-blue-600/30 transition-colors cursor-pointer">
                                    {{ trim($tag) }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                    </div>
                </article>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-1">

                <!-- Share Section -->
                <div class="bg-gradient-to-br from-blue-900/20 to-blue-800/10 border-2 border-blue-400/30 rounded-xl p-6 mb-8">
                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <i class="fas fa-share-alt text-blue-400"></i>
                        Share This Article
                    </h3>
                    <div class="space-y-3">
                        <button class="w-full flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg transition-colors">
                            <i class="fab fa-facebook-f"></i>
                            <span>Share on Facebook</span>
                        </button>
                        <button class="w-full flex items-center gap-2 bg-blue-400 hover:bg-blue-500 text-white px-4 py-3 rounded-lg transition-colors">
                            <i class="fab fa-twitter"></i>
                            <span>Share on Twitter</span>
                        </button>
                        <button class="w-full flex items-center gap-2 bg-blue-800 hover:bg-blue-900 text-white px-4 py-3 rounded-lg transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                            <span>Share on LinkedIn</span>
                        </button>
                    </div>
                </div>

                <!-- Related Posts -->
                @if($relatedBlogs->count() > 0)
                <div class="bg-gradient-to-br from-blue-900/20 to-blue-800/10 border-2 border-blue-400/30 rounded-xl p-6 mb-8">
                    <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                        <i class="fas fa-newspaper text-blue-400"></i>
                        Related Posts
                    </h3>
                    <div class="space-y-4">
                        @foreach($relatedBlogs as $relatedBlog)
                        <div class="flex gap-4 group">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center flex-shrink-0 overflow-hidden">
                                @if($relatedBlog->image_url)
                                    <img src="{{ $relatedBlog->image_url }}" alt="{{ $relatedBlog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                @else
                                    <i class="fas fa-newspaper text-blue-300"></i>
                                @endif
                            </div>
                            <div class="flex-1">
                                <h4 class="text-sm font-semibold text-white mb-1 line-clamp-2">
                                    <a href="{{ route('blog.show', $relatedBlog->id) }}" class="hover:text-blue-300 transition-colors">
                                        {{ $relatedBlog->title }}
                                    </a>
                                </h4>
                                <p class="text-xs text-gray-400">{{ $relatedBlog->created_at->format('M d, Y') }}</p>
                                @if($relatedBlog->category)
                                <span class="inline-block mt-1 bg-blue-600/20 text-blue-300 px-2 py-1 rounded text-xs">
                                    {{ $relatedBlog->category->name }}
                                </span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Back to News -->
                <div class="p-6">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300 w-full justify-center">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to News</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@include('site.components.chatbot')

@push('styles')
<style>
/* Blog Content Styling */
.prose {
    color: #e5e7eb;
}

.prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
    color: #ffffff;
    font-weight: 700;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.prose h1 {
    font-size: 2.25rem;
    line-height: 2.5rem;
}

.prose h2 {
    font-size: 1.875rem;
    line-height: 2.25rem;
}

.prose h3 {
    font-size: 1.5rem;
    line-height: 2rem;
}

.prose p {
    margin-bottom: 1.5rem;
    line-height: 1.75;
}

.prose ul, .prose ol {
    margin-bottom: 1.5rem;
    padding-left: 1.5rem;
}

.prose li {
    margin-bottom: 0.5rem;
}

.prose blockquote {
    border-left: 4px solid #3b82f6;
    padding-left: 1rem;
    margin: 1.5rem 0;
    font-style: italic;
    background: rgba(59, 130, 246, 0.1);
    padding: 1rem;
    border-radius: 0.5rem;
}

.prose img {
    border-radius: 0.5rem;
    margin: 1.5rem 0;
}

.prose a {
    color: #60a5fa;
    text-decoration: underline;
}

.prose a:hover {
    color: #93c5fd;
}

.prose strong {
    color: #ffffff;
    font-weight: 700;
}

.prose code {
    background: rgba(59, 130, 246, 0.2);
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    font-family: 'Courier New', monospace;
}

.prose pre {
    background: rgba(17, 24, 39, 0.8);
    padding: 1rem;
    border-radius: 0.5rem;
    overflow-x: auto;
    margin: 1.5rem 0;
}

.prose pre code {
    background: none;
    padding: 0;
}

/* Line clamp utilities */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
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
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
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

.interactive-bg > div {
    position: absolute;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-20px) scale(1.1); }
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
});
</script>
@endpush
