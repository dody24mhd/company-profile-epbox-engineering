@extends('site.layouts.app')
@section('title','Our Services | EPBOX ENGINEERING PTE. LTD')
@section('content')
<!-- Hero/Intro Section -->
<section class="pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 gradient-bg fade-section relative services-hero">
  <!-- Particles Canvas Layer -->
  <canvas id="servicesParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">Your
    browser doesn't support Canvas.</canvas>
  <div class="max-w-7xl mx-auto text-center relative z-10">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight"
      style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR SERVICES</h1>
    <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto"
      style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">We deliver precision
      automation systems from initial
      concept through final handover, ensuring every project meets the highest
      standards of safety, performance, and reliability.</p>
  </div>
</section>

{{-- Our Key Products moved under Our Capabilities below --}}

<!-- Our Key Products (separated section) -->
<section id="our-key-products" class="py-12 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
  <!-- Interactive Background Elements -->
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
    <!-- Our Key Products -->
    <div class="mt-4">
      <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-4 text-blue-300 section-title"
          style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">WHAT WE OFFER</h2>
        <div class="w-20 h-1 bg-blue-500 mx-auto mb-6"></div>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg leading-relaxed"
          style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Explore our core product
          offerings designed to deliver exceptional
          performance and reliability in industrial automation</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- PLC & HMI Programming -->
        <a href="{{ route('site.product.plc') }}" class="product-card overflow-hidden group border-0">
          <div class="relative overflow-hidden">
            <img src="{{ asset('img/epbox2/plc1.webp') }}" alt="PLC & HMI Programming"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
          </div>
          <div class="p-6 bg-gray-800/50 backdrop-blur-sm text-center border-0">
            <h3 class="text-xl font-semibold mb-4 group-hover:text-blue-300 transition-colors">PLC Control Panel
            </h3>
            <div class="flex justify-center">
              <span class="text-blue-400 text-sm font-medium group-hover:text-blue-300">Learn More <i
                  class="fas fa-arrow-right ml-1"></i></span>
            </div>
          </div>
        </a>

        <!-- Power Distribution Systems -->
        <a href="{{ route('site.product.power') }}" class="product-card overflow-hidden group border-0">
          <div class="relative overflow-hidden">
            <img src="{{ asset('img/epbox2/EPP.webp') }}" alt="Power Distribution Systems"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
          </div>
          <div class="p-6 bg-gray-800/50 backdrop-blur-sm text-center border-0">
            <h3 class="text-xl font-semibold mb-4 group-hover:text-blue-300 transition-colors">Explosion Proof Panels
            </h3>
            <div class="flex justify-center">
              <span class="text-blue-400 text-sm font-medium group-hover:text-blue-300">Learn More <i
                  class="fas fa-arrow-right ml-1"></i></span>
            </div>
          </div>
        </a>

        <!-- Motor Control Center -->
        <a href="{{ route('site.product.motor') }}" class="product-card overflow-hidden group border-0">
          <div class="relative overflow-hidden">
            <img src="{{ asset('img/epbox2/LV.webp') }}" alt="Motor Control Center"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
          </div>
          <div class="p-6 bg-gray-800/50 backdrop-blur-sm text-center border-0">
            <h3 class="text-xl font-semibold mb-4 group-hover:text-blue-300 transition-colors">Power Distribution Panel (LV)</h3>
            <div class="flex justify-center">
              <span class="text-blue-400 text-sm font-medium group-hover:text-blue-300">Learn More <i
                  class="fas fa-arrow-right ml-1"></i></span>
            </div>
          </div>
        </a>

        <!-- SCADA Systems -->
        <a href="{{ route('site.product.scada') }}" class="product-card overflow-hidden group border-0">
          <div class="relative overflow-hidden">
            <img src="{{ asset('img/epbox2/MMTR.webp') }}" alt="SCADA Systems"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
          </div>
          <div class="p-6 bg-gray-800/50 backdrop-blur-sm text-center border-0">
            <h3 class="text-xl font-semibold mb-4 group-hover:text-blue-300 transition-colors">Motor Control Centre (MCC LV)</h3>
            <div class="flex justify-center">
              <span class="text-blue-400 text-sm font-medium group-hover:text-blue-300">Learn More <i
                  class="fas fa-arrow-right ml-1"></i></span>
            </div>
          </div>
        </a>

        <!-- Safety Systems -->
        <a href="{{ route('site.product.safety') }}" class="product-card overflow-hidden group border-0">
          <div class="relative overflow-hidden">
            <img src="{{ asset('img/epbox2/LCL.webp') }}" alt="Safety Systems"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
          </div>
          <div class="p-6 bg-gray-800/50 backdrop-blur-sm text-center border-0">
            <h3 class="text-xl font-semibold mb-4 group-hover:text-blue-300 transition-colors">Local Control Panel (LCP)</h3>
            <div class="flex justify-center">
              <span class="text-blue-400 text-sm font-medium group-hover:text-blue-300">Learn More <i
                  class="fas fa-arrow-right ml-1"></i></span>
            </div>
          </div>
        </a>

        <!-- Custom Control Panels -->
        <a href="{{ route('site.product.panels') }}" class="product-card overflow-hidden group border-0">
          <div class="relative overflow-hidden">
            <img src="{{ asset('img/epbox2/FR.webp') }}" alt="Custom Control Panels"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
            <div
              class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
          </div>
          <div class="p-6 bg-gray-800/50 backdrop-blur-sm text-center border-0">
            <h3 class="text-xl font-semibold mb-4 group-hover:text-blue-300 transition-colors">Custom Control Panels
            </h3>
            <div class="flex justify-center">
              <span class="text-blue-400 text-sm font-medium group-hover:text-blue-300">Learn More <i
                  class="fas fa-arrow-right ml-1"></i></span>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="mt-4"></div>
  </div>
</section>

<!-- What We Do Section -->
<section id="offer-services" class="py-12 px-6 gradient-bg relative overflow-hidden fade-section">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500 rounded-full blur-3xl animate-pulse delay-1000"></div>
    <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400 rounded-full blur-2xl animate-pulse delay-500"></div>
  </div>

  <div class="max-w-7xl mx-auto relative z-10">
    <div class="text-center mb-8">
      <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-4 section-title"
        style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR CAPABILITIES</h2>
      <div class="w-32 h-1 bg-white mx-auto mb-4"></div>
    </div>

    <!-- Capabilities Grid Layout -->
    <div class="capabilities-container">
      <ul class="capabilities-grid">
        <!-- Control Panel Engineering -->
        <li class="capability-item control-panel">
          <h3 class="capability-title">CONTROL PANEL ENGINEERING</h3>
          <p class="capability-description">Complete design and manufacturing of LV panels, MCC, and PLC systems with
            full documentation and FAT testing.</p>
          <a href="{{ route('site.service.control') }}" class="capability-link">Learn More</a>
        </li>

        <!-- Automation Integration -->
        <li class="capability-item automation">
          <h3 class="capability-title">AUTOMATION INTEGRATION</h3>
          <p class="capability-description">Seamless integration of PLC, SCADA, and HMI systems for intelligent
            industrial automation solutions.</p>
          <a href="{{ route('site.service.automation') }}" class="capability-link">Learn More</a>
        </li>

        <!-- System Integration Solutions -->
        <li class="capability-item system-integration">
          <h3 class="capability-title">SYSTEM INTEGRATION SOLUTIONS</h3>
          <p class="capability-description">End-to-end system integration with robust networking and communication for
            critical operations.</p>
          <a href="{{ route('site.service.system') }}" class="capability-link">Learn More</a>
        </li>

        <!-- Engineering & Technical Support -->
        <li class="capability-item engineering">
          <h3 class="capability-title">ENGINEERING & TECHNICAL SUPPORT</h3>
          <p class="capability-description">Comprehensive technical support and engineering expertise throughout the
            entire project lifecycle.</p>
          <a href="{{ route('site.service.engineering') }}" class="capability-link">Learn More</a>
        </li>

        <!-- Safety & Compliance by Design -->
        <li class="capability-item safety">
          <h3 class="capability-title">SAFETY & COMPLIANCE BY DESIGN</h3>
          <p class="capability-description">ATEX, SIL, and marine-grade compliance built into solutions for hazardous
            and demanding environments.</p>
          <a href="{{ route('site.service.safety') }}" class="capability-link">Learn More</a>
        </li>
      </ul>
    </div>
    <div class="mt-8"></div>
  </div>
</section>

<!-- Testimonials Clients -->
<section class="py-20 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
	<!-- Interactive Background Elements -->
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
	  <div class="text-center mb-16">
		<h2 class="text-3xl md:text-4xl font-bold mb-4 text-white-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">CLIENT TESTIMONIALS</h2>
		<div class="w-20 h-1 bg-blue-500 mx-auto"></div>
	  </div>
	  <div class="grid md:grid-cols-3 gap-8">
		@forelse($testimonials as $testimonial)
		<div class="bg-gray-800 p-6 rounded-lg">
		  <div class="flex items-center mb-4">
			<div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
				@php
					$iconMap = [
						'LinkedIn Review' => 'fab fa-linkedin',
						'Industry Review' => 'fas fa-industry',
						'Instagram Review' => 'fab fa-instagram',
						'Interview On Site' => 'fas fa-handshake',
						'Client Feedback' => 'fas fa-comment-dots',
						'Project Review' => 'fas fa-project-diagram'
					];
					$icon = $iconMap[$testimonial->categories] ?? 'fas fa-user';
				@endphp
				<i class="{{ $icon }} text-white"></i>
			</div>
			<div class="flex-1">
			  <h4 class="font-semibold">{{ $testimonial->name }}</h4>
			  <p class="text-gray-400 text-sm">{{ $testimonial->position }}</p>
			  <p class="text-gray-500 text-sm">{{ $testimonial->company }}</p>
			  <div class="flex items-center mt-2">
				<span class="text-gray-500 text-xs">{{ $testimonial->categories }}</span>
			  </div>
			</div>
		  </div>
		  <p class="text-gray-300 italic">"{{ $testimonial->description }}"</p>
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

<!-- Why Clients Choose Us Section -->
<section id="why-choose-us" class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <!-- Animated Background Elements -->
  <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500 rounded-full blur-3xl animate-pulse delay-1000"></div>
  <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400 rounded-full blur-2xl animate-pulse delay-500"></div>
  </div>
  <div class="floating-orb orb1"></div>
  <div class="floating-orb orb2"></div>
  <div class="floating-orb orb3"></div>
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white-300 section-title"
        style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">WHY CHOOSE US</h2>
      <div class="w-32 h-1 bg-blue-500 mx-auto mb-4"></div>
    </div>
    <!-- Why Choose Us - Simplified Style -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- End-to-End Expertise -->
      <div class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-center">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-cogs text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">End-to-End Expertise</h3>
        </div>
      </div>

      <!-- Safety & Compliance -->
      <div class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-center">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-shield-alt text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Safety & Compliance</h3>
        </div>
      </div>

      <!-- Tailored Solutions -->
      <div class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-center">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-tools text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Tailored Solutions</h3>
        </div>
      </div>

      <!-- Global Standards -->
      <div class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-center">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-globe text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Global Standards</h3>
        </div>
      </div>

      <!-- Trusted Across Industries -->
      <div class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-center">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-industry text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Trusted Across Industries</h3>
        </div>
      </div>

      <!-- Partnership Approach -->
      <div class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-center">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-handshake text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Partnership Approach</h3>
        </div>
      </div>
    </div>

    <!-- Section footer branding -->
    <div class="text-center mt-12 pt-8 border-t border-[#3b82f6]">
      <h3 class="text-3xl md:text-4xl font-bold text-white mb-2"
        style="font-family: 'Helvetica', Arial, sans-serif; font-weight: bold;">"Beyond Boundaries, We Command Control"
      </h3>
    </div>
  </div>
</section>

@endsection

@include('site.components.chatbot')