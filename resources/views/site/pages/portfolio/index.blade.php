@extends('site.layouts.app')
@section('title','Projects & Portfolio | Epbox Engineering')
@section('content')
<section class="pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 gradient-bg relative overflow-hidden fade-section">
	<!-- Canvas Background -->
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h1 class="text-4xl md:text-6xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR<span class="text-blue-300"> PROJECTS</span></h1>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Showcasing real case studies and project gallery that demonstrate our expertise in industrial automation, control panel solutions, and innovative engineering across diverse industries worldwide.</p>
	</div>
</section>

<!-- Our Work - Swiper.js Coverflow Slider -->
<section id="work-swiper" class="py-20 px-6 relative overflow-hidden fade-section">
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
      <div class="text-center mb-8">
          <h2 class="text-3xl md:text-4xl font-bold section-title mb-3" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR WORK IN ACTION</h2>
          <div class="w-28 h-1 bg-blue-500 mx-auto mb-3"></div>
          <p class="text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">A rotating glimpse of our workshop builds, on‑site installations, and commissioning moments that bring EPBOX ENGINEERING panels to life.</p>
      </div>
      <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css">
      <div class="swiper mySwiper">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar4.png') }}" class="w-full h-72 object-cover rounded" alt="w1"></div>
              <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar27.png') }}" class="w-full h-72 object-cover rounded" alt="w2"></div>
              <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar34.png') }}" class="w-full h-72 object-cover rounded" alt="w3"></div>
              <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar1.png') }}" class="w-full h-72 object-cover rounded" alt="w4"></div>
              <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar16.png') }}" class="w-full h-72 object-cover rounded" alt="w5"></div>
              <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar33.png') }}" class="w-full h-72 object-cover rounded" alt="w6"></div>
          </div>
          <div class="swiper-pagination"></div>
      </div>
      <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
      <script>
          (function(){
              new Swiper('.mySwiper',{
                  slidesPerView: 1.2,
                  spaceBetween: 16,
                  centeredSlides: true,
                  loop: true,
                  autoplay: { delay: 2500, disableOnInteraction: false },
                  pagination: { el: '.swiper-pagination', clickable: true },
                  breakpoints: { 768:{ slidesPerView:2.2 }, 1024:{ slidesPerView:3 } }
              });
          })();
      </script>
  </div>
</section>

<!-- Why It Matters Section -->
<section id="why-matters" class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
  <!-- Canvas Background -->
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>

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
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
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
			<!-- MODEC FPSO Project -->
			<div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-sm p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
				<div class="flex items-center mb-4">
					<div class="w-12 h-12 bg-blue-600/20 rounded-sm flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
						<i class="fas fa-fire text-blue-400 text-xl"></i>
					</div>
							<div>
								<h3 class="text-lg font-semibold text-white mb-1">MODEC FPSO</h3>
								<span class="text-blue-300 text-sm">Safety & Compliance</span>
							</div>
				</div>
				<p class="text-gray-300 text-sm mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Explosion Proof Fire & Gas Control Panels (IECEx/ATEX Certified)</p>
			</div>

            <!-- Google Data Center Project -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-sm p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-600/20 rounded-sm flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
                        <i class="fas fa-database text-blue-400 text-xl"></i>
                    </div>
							<div>
								<h3 class="text-lg font-semibold text-white mb-1">Google Data Center</h3>
								<span class="text-blue-300 text-sm">System Integration</span>
							</div>
                </div>
                <p class="text-gray-300 text-sm mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Redundant Power Distribution & PLC Systems</p>
            </div>

            <!-- IndoCement Project -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-sm p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-600/20 rounded-sm flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
                        <i class="fas fa-industry text-blue-400 text-xl"></i>
                    </div>
							<div>
								<h3 class="text-lg font-semibold text-white mb-1">IndoCement</h3>
								<span class="text-blue-300 text-sm">Automation Integration</span>
							</div>
                </div>
                <p class="text-gray-300 text-sm mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">SCADA Integration for Scrubber & Process Monitoring System</p>
            </div>

            <!-- Cleanroom Facility Project -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-sm p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-600/20 rounded-sm flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
                        <i class="fas fa-shield-alt text-blue-400 text-xl"></i>
                    </div>
							<div>
								<h3 class="text-lg font-semibold text-white mb-1">Cleanroom Facility</h3>
								<span class="text-blue-300 text-sm">Control Panel Engineering</span>
							</div>
                </div>
                <p class="text-gray-300 text-sm mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">LV Distribution Panels with surge protection, integrated with BMS</p>
            </div>

            <!-- Data Center Backup Project -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-sm p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-600/20 rounded-sm flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
                        <i class="fas fa-server text-blue-400 text-xl"></i>
                    </div>
							<div>
								<h3 class="text-lg font-semibold text-white mb-1">Data Center Backup</h3>
								<span class="text-blue-300 text-sm">Engineering Support</span>
							</div>
                </div>
                <p class="text-gray-300 text-sm mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Backup power systems and redundancy solutions for critical data infrastructure</p>
            </div>

            <!-- Fire Fighting System Project -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20 rounded-sm p-6 hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-600/20 rounded-sm flex items-center justify-center mr-4 group-hover:bg-blue-600/30 transition-colors">
                        <i class="fas fa-fire-extinguisher text-blue-400 text-xl"></i>
                    </div>
							<div>
								<h3 class="text-lg font-semibold text-white mb-1">Fire Fighting System</h3>
								<span class="text-blue-300 text-sm">Safety & Compliance</span>
							</div>
                </div>
                <p class="text-gray-300 text-sm mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Advanced fire detection and suppression control systems with emergency response integration</p>
            </div>
		</div>
	</div>
</section>

@endsection