@extends('site.layouts.app')

@section('title', $blog->meta_title ?? $blog->title . ' - Epbox Engineering')

@section('meta')
<meta name="description" content="{{ $blog->meta_description ?? $blog->excerpt }}">
<meta property="og:title" content="{{ $blog->title }}">
<meta property="og:description" content="{{ $blog->meta_description ?? $blog->excerpt }}">
<meta property="og:image" content="{{ $blog->image_url }}">
<meta property="og:type" content="article">
<meta property="article:published_time" content="{{ $blog->published_at ?? $blog->created_at }}">
<meta property="article:author" content="{{ $blog->author ?? 'EPBox Engineering Team' }}">
@endsection

@section('content')
<!-- Blog Detail Hero Section -->
<section class="pt-32 pb-20 px-6 gradient-bg relative overflow-hidden">
    <div class="max-w-4xl mx-auto relative z-10 text-center">
        <div class="mb-6">
            <span class="tag">{{ $blog->category->name ?? 'Uncategorized' }}</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">
            {{ $blog->title }}
        </h1>
        <div class="flex items-center justify-center gap-6 text-gray-300 mb-8">
            <div class="flex items-center gap-2">
                <i class="fas fa-user"></i>
                <span>{{ $blog->author ?? 'EPBox Engineering Team' }}</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-calendar"></i>
                <span>{{ $blog->published_at ? $blog->published_at->format('F d, Y') : $blog->created_at->format('F d, Y') }}</span>
            </div>
            @if($blog->category)
            <div class="flex items-center gap-2">
                <i class="fas fa-folder"></i>
                <span>{{ $blog->category->name }}</span>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Blog Content Section -->
<section class="py-20 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Blog Content -->
            <div class="lg:col-span-2">
                <!-- Blog Image -->
                @if($blog->image_url)
                <div class="mb-8">
                    <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="w-full h-96 object-cover rounded-lg">
                </div>
                @endif
                
                <!-- Blog Content -->
                <article class="prose prose-lg prose-invert max-w-none">
                    <div class="blog-content">
                        {!! $blog->content !!}
                    </div>
                </article>
                
                <!-- Blog Footer -->
                <div class="mt-12 pt-8 border-t border-gray-700">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <span class="text-gray-400">Share this article:</span>
                            <div class="flex gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                                   target="_blank" 
                                   class="text-blue-400 hover:text-blue-300 transition">
                                    <i class="fab fa-facebook text-xl"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" 
                                   target="_blank" 
                                   class="text-blue-400 hover:text-blue-300 transition">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" 
                                   target="_blank" 
                                   class="text-blue-400 hover:text-blue-300 transition">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                            </div>
                        </div>
                        
                        <a href="{{ route('site.blog') }}" class="text-blue-400 hover:text-blue-300 transition">
                            <i class="fas fa-arrow-left mr-2"></i>Back to Blog
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="space-y-8">
                <!-- Related Posts -->
                @if($relatedBlogs->count() > 0)
                <div class="sidebar-card rounded-lg p-6">
                    <h3 class="text-xl font-bold text-white mb-6">Related Articles</h3>
                    <div class="space-y-4">
                        @foreach($relatedBlogs as $relatedBlog)
                        <div class="flex gap-3">
                            @if($relatedBlog->image_url)
                            <img src="{{ $relatedBlog->image_url }}" alt="{{ $relatedBlog->title }}" class="w-16 h-16 object-cover rounded">
                            @endif
                            <div>
                                <h4 class="text-sm font-semibold text-white">
                                    <a href="{{ route('site.blog.show', $relatedBlog) }}" class="hover:text-blue-400 transition">
                                        {{ Str::limit($relatedBlog->title, 40) }}
                                    </a>
                                </h4>
                                <p class="text-xs text-gray-400">{{ $relatedBlog->created_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Newsletter -->
                <div class="sidebar-card rounded-lg p-6">
                    <h3 class="text-xl font-bold text-white mb-4">Stay Updated</h3>
                    <p class="text-gray-300 mb-4">Subscribe to our newsletter for the latest insights and updates.</p>
                    <form id="newsletterForm" class="space-y-3">
                        @csrf
                        <input type="email" name="email" placeholder="Your email address" class="search-input w-full px-4 py-3 rounded-lg" required>
                        <button type="submit" class="read-more-btn w-full">
                            Subscribe <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
                
                <!-- Tags -->
                @if($blog->tags)
                <div class="sidebar-card rounded-lg p-6">
                    <h3 class="text-xl font-bold text-white mb-6">Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $blog->tags) as $tag)
                        <span class="tag">{{ trim($tag) }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Newsletter subscription for blog detail page
    document.addEventListener('DOMContentLoaded', function() {
        const newsletterForm = document.getElementById('newsletterForm');
        
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                const email = formData.get('email');
                
                if (!email) {
                    alert('Please enter a valid email address');
                    return;
                }
                
                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Subscribing...';
                submitBtn.disabled = true;
                
                // Submit newsletter subscription
                fetch('/newsletter/subscribe', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Thank you for subscribing to our newsletter!');
                        this.reset();
                    } else {
                        alert(data.message || 'Error subscribing. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error subscribing. Please try again.');
                })
                .finally(() => {
                    // Reset button state
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                });
            });
        }
    });
</script>
@endpush
