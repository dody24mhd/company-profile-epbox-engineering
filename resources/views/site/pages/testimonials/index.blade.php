@extends('site.layouts.app')
@section('title','Client Testimonials | EPBOX ENGINEERING PTE. LTD')
@section('content')
<section class="testimonials-hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 gradient-bg relative overflow-hidden fade-section">
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>

	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h1 class="text-4xl md:text-6xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">CLIENT<span class="text-blue-300"> TESTIMONIALS</span></h1>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Discover what our clients say about EPBOX Engineering's control panel solutions, industrial automation expertise, and commitment to excellence across diverse industries.</p>
	</div>
</section>

<!-- Testimonials Section -->
<section class="py-20 px-6 relative overflow-hidden fade-section">
	<!-- Canvas Background -->
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<!-- Interactive Background Elements -->
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>

	<div class="max-w-7xl mx-auto relative z-10">
		<!-- Search and Filter -->
		<div class="mb-12">
			<div class="flex flex-col md:flex-row gap-4 max-w-4xl mx-auto">
				<!-- Search Input -->
				<div class="flex-1">
					<div class="relative">
						<i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
						<input type="text" id="testimonial-search" placeholder="Search testimonials..."
							class="w-full pl-12 pr-4 py-4 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:outline-none transition-all duration-300">
					</div>
				</div>

				<!-- Category Filter -->
				<div class="md:w-64">
					<div class="relative">
						<select id="category-filter"
							class="w-full pl-4 pr-10 py-4 bg-gray-800 border border-gray-600 rounded-lg text-white focus:border-blue-500 focus:outline-none transition-all duration-300 appearance-none cursor-pointer">
							<option value="all">All Categories</option>
							@foreach($testimonialCategories as $category)
							<option value="{{ $category }}">{{ $category }}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
			@forelse($testimonials as $testimonial)
			<div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-xl p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/20 transform hover:-translate-y-2 testimonial-card"
				data-name="{{ strtolower($testimonial->name) }}" 
				data-company="{{ strtolower($testimonial->company) }}" 
				data-description="{{ strtolower($testimonial->description) }}"
				data-category="{{ strtolower($testimonial->categories) }}">
				<div class="flex items-start mb-4">
					<div class="w-12 h-12 bg-blue-600/20 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
						@php
							$iconMap = [
								'LinkedIn Review' => 'fab fa-linkedin',
								'Industry Review' => 'fas fa-industry',
								'Instagram Review' => 'fab fa-instagram',
								'Interview On Site' => 'fas fa-handshake',
								'Client Feedback' => 'fas fa-comment-dots',
								'Project Review' => 'fas fa-project-diagram'
							];
							$icon = $iconMap[$testimonial->categories] ?? 'fas fa-quote-left';
						@endphp
						<i class="{{ $icon }} text-blue-400 text-lg"></i>
					</div>
					<div class="flex-1">
						<div class="flex items-center mb-2">
							<span class="bg-blue-600 px-3 py-1 text-xs font-semibold rounded-full">{{ $testimonial->categories }}</span>
						</div>
						<h4 class="text-white font-semibold mb-1">{{ $testimonial->name }}</h4>
						<p class="text-blue-300 text-sm">{{ $testimonial->position }}</p>
						<p class="text-gray-400 text-sm">{{ $testimonial->company }}</p>
					</div>
				</div>
				<div class="relative">
					<i class="fas fa-quote-left text-blue-400/30 text-2xl absolute -top-2 -left-2"></i>
					<p class="text-gray-300 text-sm leading-relaxed pl-6" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">{{ $testimonial->description }}</p>
				</div>
			</div>
			@empty
			<div class="col-span-full text-center py-12">
				<div class="bg-gradient-to-r from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-lg p-8">
					<i class="fas fa-comment-dots text-6xl text-blue-400 mb-4"></i>
					<h3 class="text-xl font-semibold text-white mb-2">No Testimonials Available</h3>
					<p class="text-gray-300">Check back later for client testimonials and reviews.</p>
				</div>
			</div>
			@endforelse
		</div>
	</div>
</section>

@endsection

@include('site.components.chatbot')

@push('scripts')
<script>
// Search and filter functionality
const searchInput = document.getElementById('testimonial-search');
const categoryFilter = document.getElementById('category-filter');
const testimonialCards = document.querySelectorAll('.testimonial-card');

function filterTestimonials() {
    const searchTerm = searchInput.value.toLowerCase();
    const selectedCategory = categoryFilter.value.toLowerCase();

    testimonialCards.forEach(card => {
        const name = card.getAttribute('data-name');
        const company = card.getAttribute('data-company');
        const description = card.getAttribute('data-description');
        const cardCategory = card.getAttribute('data-category');

        const matchesSearch = name.includes(searchTerm) || company.includes(searchTerm) || description.includes(searchTerm);
        const matchesCategory = selectedCategory === 'all' || cardCategory === selectedCategory;

        if (matchesSearch && matchesCategory) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

searchInput.addEventListener('input', filterTestimonials);
categoryFilter.addEventListener('change', filterTestimonials);
</script>
@endpush
