@extends('site.layouts.app')
@section('title','Our Services | Epbox Engineering')
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
  <!-- Canvas Background -->
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none"
    style="z-index:0; opacity:0.5;"></canvas>
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
            <img src="{{ asset('img/epbox/plc1.png') }}" alt="PLC & HMI Programming"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
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
            <img src="{{ asset('img/epbox/EPP.png') }}" alt="Power Distribution Systems"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
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
            <img src="{{ asset('img/epbox/LV.png') }}" alt="Motor Control Center"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
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
            <img src="{{ asset('img/epbox/MMTR.png') }}" alt="SCADA Systems"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
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
            <img src="{{ asset('img/epbox/LCL.png') }}" alt="Safety Systems"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
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
            <img src="{{ asset('img/epbox/FR.png') }}" alt="Custom Control Panels"
              class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
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
  <!-- Canvas Background -->
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none"
    style="z-index:0; opacity:0.5;"></canvas>
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
	<!-- Canvas Background -->
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
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
			<div class="bg-gray-800 p-6 rounded-lg">
			  <div class="flex items-center mb-4">
				<div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4"><i class="fas fa-user text-white"></i></div>
				<div class="flex-1">
				  <h4 class="font-semibold">John Smith</h4>
				  <p class="text-gray-400 text-sm">Plant Manager, Toyota Indonesia</p>
				  <div class="flex items-center mt-2">
					<i class="fab fa-linkedin text-blue-400 text-xs mr-1"></i>
					<span class="text-gray-500 text-xs">LinkedIn Review</span>
				  </div>
				</div>
			  </div>
			  <p class="text-gray-300 italic">"Epbox Engineering delivered an exceptional automation system that exceeded our expectations. Their expertise in automotive manufacturing control systems is unmatched."</p>
			</div>
			<div class="bg-gray-800 p-6 rounded-lg">
			  <div class="flex items-center mb-4">
				<div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4"><i class="fas fa-user text-white"></i></div>
				<div class="flex-1">
				  <h4 class="font-semibold">Sarah Johnson</h4>
				  <p class="text-gray-400 text-sm">Operations Director, PLN</p>
				  <div class="flex items-center mt-2">
					<i class="fas fa-microphone text-green-400 text-xs mr-1"></i>
					<span class="text-gray-500 text-xs">Industry Interview</span>
				  </div>
				</div>
			  </div>
			  <p class="text-gray-300 italic">"The power plant control system from Epbox Engineering has significantly improved our operational efficiency and grid stability. Highly recommended!"</p>
			</div>
			<div class="bg-gray-800 p-6 rounded-lg">
			  <div class="flex items-center mb-4">
				<div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4"><i class="fas fa-user text-white"></i></div>
				<div class="flex-1">
				  <h4 class="font-semibold">Michael Chen</h4>
				  <p class="text-gray-400 text-sm">CEO, PetroChem Industries</p>
				  <div class="flex items-center mt-2">
					<i class="fas fa-star text-yellow-400 text-xs mr-1"></i>
					<span class="text-gray-500 text-xs">Google Reviews</span>
				  </div>
				</div>
			  </div>
			  <p class="text-gray-300 italic">"Outstanding work on our refinery control system. The safety features and monitoring capabilities have given us complete peace of mind."</p>
			</div>
	  </div>
	</div>
</section>

<!-- Why Clients Choose Us Section -->
<section id="why-choose-us" class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <!-- Canvas Background -->
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none"
    style="z-index:0; opacity:0.5;"></canvas>
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
    <!-- Why Choose Us - Alternative Style -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- End-to-End Expertise -->
      <div
        class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-start mb-4">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-cogs text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">End-to-End Expertise</h3>
        </div>
        <p class="text-[#aab8d3] text-sm"
          style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">From concept design to
          commissioning, we provide complete industrial automation and control solutions.</p>
      </div>

      <!-- Safety & Compliance -->
      <div
        class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-start mb-4">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-shield-alt text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Safety & Compliance</h3>
        </div>
        <p class="text-[#aab8d3] text-sm"
          style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Our solutions are
          engineered with ATEX, IECEx, IEC, NFPA, NEMA, and CP5 principles, ensuring compliance with international
          safety standards.</p>
      </div>

      <!-- Tailored Solutions -->
      <div
        class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-start mb-4">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-tools text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Tailored Solutions</h3>
        </div>
        <p class="text-[#aab8d3] text-sm"
          style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">We don't believe in
          one-size-fits-all. Every panel, system, and integration project is designed to meet the specific needs of each
          client's operation.</p>
      </div>

      <!-- Global Standards -->
      <div
        class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-start mb-4">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-globe text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Global Standards</h3>
        </div>
        <p class="text-[#aab8d3] text-sm"
          style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">With operations in
          Singapore and Batam, Indonesia, we offer world-class engineering backed by local fabrication and faster
          delivery.</p>
      </div>

      <!-- Trusted Across Industries -->
      <div
        class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-start mb-4">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-industry text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Trusted Across Industries</h3>
        </div>
        <p class="text-[#aab8d3] text-sm"
          style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Our experience spans oil &
          gas, marine & offshore, power generation, clean energy, data centers, and critical infrastructure. This
          cross-industry expertise enables us to adapt proven best practices to new challenges.</p>
      </div>

      <!-- Partnership Approach -->
      <div
        class="bg-[#1c2a5a] p-6 rounded-lg border border-transparent hover:bg-[#2a3a7a] hover:shadow-lg transition-all duration-300">
        <div class="flex items-start mb-4">
          <div class="bg-[#3b82f6]/20 p-3 rounded-full mr-4">
            <i class="fas fa-handshake text-blue-400 text-2xl"></i>
          </div>
          <h3 class="text-lg font-semibold text-white">Partnership Approach</h3>
        </div>
        <p class="text-[#aab8d3] text-sm"
          style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">We see ourselves not only
          as a supplier but as a strategic partner — working closely with clients to understand their challenges and
          build solutions that are safe, efficient, and future-ready.</p>
      </div>
    </div>

    <!-- Section footer branding -->
    <div class="text-center mt-12 pt-8 border-t border-[#3b82f6]">
      <h3 class="text-3xl md:text-4xl font-bold text-[#3b82f6] mb-2"
        style="font-family: 'Helvetica', Arial, sans-serif; font-weight: bold;">"Beyond Boundaries, We Command Control"
      </h3>
    </div>
  </div>
</section>

<!-- Chat Components (reuse global JS) -->
<div class="chat-box" onclick="toggleChat()">
  <i class="fas fa-comments"></i>
</div>
<div class="chat-popup" id="chatPopup">
  <div class="chat-header">
    <h3><i class="fas fa-headset mr-2"></i>Chat with EPBox Engineering</h3>
    <button class="close-chat" onclick="toggleChat()"><i class="fas fa-times"></i></button>
  </div>
  <div class="chat-body">
    <p class="text-gray-300 text-sm mb-4">How can we help you today?</p>
    <input type="text" class="chat-input" placeholder="Type your message here..." id="chatMessage">
    <div class="chat-actions">
      <button class="chat-btn primary" onclick="sendMessage()"><i class="fas fa-paper-plane mr-2"></i>Send</button>
      <button class="chat-btn secondary" onclick="scrollToContact()"><i class="fas fa-phone mr-2"></i>Call Us</button>
    </div>
  </div>
</div>

@endsection