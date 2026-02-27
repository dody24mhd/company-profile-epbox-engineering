@extends('site.layouts.app')
@section('title','Projects & Portfolio | EPBOX ENGINEERING PTE. LTD')
@section('content')
<section class="portfolio-hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 gradient-bg relative overflow-hidden fade-section">
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>

	<!-- Particles Canvas Layer for Portfolio Hero -->
	<canvas id="portfolioParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">
		Your browser doesn't support Canvas.
	</canvas>
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h1 class="text-4xl md:text-6xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR<span class="text-blue-300"> PROJECTS</span></h1>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Showcasing real case studies and project gallery that demonstrate our expertise in industrial automation, control panel solutions, and innovative engineering across diverse industries worldwide.</p>
	</div>
</section>

<!-- Our Work - Swiper.js Coverflow Slider -->
<section id="work-swiper" class="py-8 sm:py-12 px-4 sm:px-6 relative overflow-hidden fade-section">
  <!-- Canvas Background -->
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
  <!-- Interactive Background Elements (match Home company profile style) -->
  <div class="interactive-bg">
      <div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
      <div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
      <div class="w-12 h-12 bottom-16 left-1/4 animate-pulse delay-500"></div>
  </div>
  <!-- Floating Orbs -->
  <div class="floating-orb orb1"></div>
  <div class="floating-orb orb2"></div>
  <div class="floating-orb orb3"></div>
  <div class="max-w-7xl mx-auto relative z-10">
      <div class="text-center mb-6 md:mb-4">
          <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-4 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR WORK IN ACTION</h2>
          <div class="w-20 h-1 bg-blue-500 mx-auto mb-2"></div>
          <p class="text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">A rotating glimpse of our workshop builds, on‑site installations, and commissioning moments that bring EPBOX ENGINEERING panels to life.</p>
      </div>
      <!-- Main Content -->
      <div class="mt-6 md:mt-8 mb-6 md:mb-8">
          <!-- Load Swiper CSS asynchronously -->
          <link rel="preload" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
          <noscript><link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css"></noscript>
          <div class="swiper mySwiper" style="height: 300px; overflow: hidden;">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="{{ asset('img/epbox2/gambar4.webp') }}" 
                           class="w-full h-full object-cover rounded" 
                           alt="w1" 
                           loading="lazy">
                  </div>
                  <div class="swiper-slide">
                      <img src="{{ asset('img/epbox2/45.webp') }}" 
                           class="w-full h-full object-cover rounded" 
                           alt="w2" 
                           loading="lazy">
                  </div>
                  <div class="swiper-slide">
                      <img src="{{ asset('img/epbox2/46.webp') }}" 
                           class="w-full h-full object-cover rounded" 
                           alt="w3" 
                           loading="lazy">
                  </div>
                  <div class="swiper-slide">
                      <img src="{{ asset('img/epbox2/gambar1.webp') }}" 
                           class="w-full h-full object-cover rounded" 
                           alt="w4" 
                           loading="lazy">
                  </div>
                  <div class="swiper-slide">
                      <img src="{{ asset('img/epbox2/44.webp') }}" 
                           class="w-full h-full object-cover rounded" 
                           alt="w5" 
                           loading="lazy">
                  </div>
                  <div class="swiper-slide">
                      <img src="{{ asset('img/epbox2/gambar33.webp') }}" 
                           class="w-full h-full object-cover rounded" 
                           alt="w6" 
                           loading="lazy">
                  </div>
              </div>
              <div class="swiper-pagination"></div>
          </div>
      </div>
      <!-- Load Swiper JS asynchronously -->
      <script>
          (function(){
              // Load Swiper.js asynchronously
              var script = document.createElement('script');
              script.src = 'https://unpkg.com/swiper@9/swiper-bundle.min.js';
              script.async = true;
              script.defer = true;
              script.onload = function() {
                  // Initialize Swiper after library loads
                  if (typeof Swiper !== 'undefined') {
                      new Swiper('.mySwiper',{
                  slidesPerView: 1.2,
                  spaceBetween: 16,
                  centeredSlides: true,
                  loop: true,
                  autoplay: { delay: 2500, disableOnInteraction: false },
                  pagination: { el: '.swiper-pagination', clickable: true },
                          breakpoints: { 768:{ slidesPerView:2.2 }, 1024:{ slidesPerView:3 } }
                      });
                  }
              };
              document.head.appendChild(script);
          })();
      </script>
  </div>
</section>

<!-- Why It Matters Section -->
<section id="why-matters" class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">

  <div class="max-w-7xl mx-auto relative z-10 text-center">
    <div class="mb-8">
      <h2 class="text-3xl md:text-4xl font-bold section-title mb-3" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">WHY IT MATTERS</h2>
      <div class="w-28 h-1 bg-blue-500 mx-auto"></div>
    </div>
    <p class="text-gray-300 max-w-4xl mx-auto text-lg leading-relaxed" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
      Every project we undertake is a testament to our commitment to delivering automation solutions that go beyond just control systems. With experience across various industries, we have helped clients achieve operational efficiency, higher security, and future-readiness. From the oil & gas sector to mission-critical facilities, we ensure that every project delivers reliable results.
    </p>
  </div>
</section>

<!-- Project Highlights Section -->
<section id="project-highlights" class="py-20 px-6 relative overflow-hidden fade-section">
    <!-- Interactive Background Elements (match Industries We Serve) -->
    <div class="interactive-bg">
        <div class="w-20 h-20 top-10 right-10 animate-pulse delay-300"></div>
        <div class="w-16 h-16 bottom-10 left-1/3 animate-pulse delay-700"></div>
        <div class="w-28 h-28 top-1/3 right-1/4 animate-pulse delay-500"></div>
    </div>
    <!-- Parallax Background Elements -->
    <div class="parallax-bg absolute inset-0 pointer-events-none">
        <div class="absolute w-24 h-24 top-20 left-10"></div>
        <div class="absolute w-32 h-32 bottom-20 right-10" style="animation-delay: 2s;"></div>
        <div class="absolute w-20 h-20 top-1/2 left-1/4" style="animation-delay: 4s;"></div>
    </div>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="mb-8">
			<div class="inline-block">
				<h2 class="text-3xl md:text-4xl lg:text-4xl font-bold section-title mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR PROJECTS</h2>
				<div class="h-1 bg-white w-full mb-3"></div>
			</div>
		</div>
		
		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
			@forelse($projects as $project)
			<div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-sm p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
				<div class="flex items-center mb-4">
					<div class="w-12 h-12 bg-blue-600/20 rounded-sm flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
						@php
							$iconMap = [
								'Safety & Compliance' => 'fas fa-shield-alt',
								'Data Centers' => 'fas fa-server',
								'Manufacturing' => 'fas fa-industry',
								'Oil & Gas' => 'fas fa-oil-can',
								'Logistics' => 'fas fa-truck',
								'Commercial' => 'fas fa-building',
								'Power Generation' => 'fas fa-bolt',
								'Automation' => 'fas fa-robot',
								'Control Systems' => 'fas fa-cogs',
								'Industrial' => 'fas fa-tools',
								'System Integration' => 'fas fa-database',
								'Automation Integration' => 'fas fa-industry',
								'Control Panel Engineering' => 'fas fa-shield-alt',
								'Engineering Support' => 'fas fa-server'
							];
							$icon = $iconMap[$project->categories] ?? 'fas fa-project-diagram';
						@endphp
						<i class="{{ $icon }} text-blue-400 text-xl"></i>
					</div>
					<div>
						<h3 class="text-lg font-semibold text-white mb-1">{{ $project->title }}</h3>
						<span class="text-blue-300 text-sm">{{ $project->categories }}</span>
					</div>
				</div>
				<p class="text-gray-300 text-sm mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">{{ $project->description }}</p>
			</div>
			@empty
			<div class="col-span-full text-center py-12">
				<div class="bg-gradient-to-r from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-lg p-8">
					<i class="fas fa-project-diagram text-6xl text-blue-400 mb-4"></i>
					<h3 class="text-xl font-semibold text-white mb-2">No Projects Available</h3>
					<p class="text-gray-300">Check back later for our latest projects and case studies.</p>
				</div>
			</div>
			@endforelse

		</div>
	</div>
</section>

@endsection

@include('site.components.chatbot')