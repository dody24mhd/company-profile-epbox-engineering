@extends('site.layouts.app')

@section('title', 'Epbox Engineering | Panel Manufacturer & Control System Solutions')

@section('content')
<!-- Home Section -->
<section id="home" class="hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 flex items-center relative fade-section">
    <!-- Hero Slider -->
    <div class="hero-slider">
        <div class="hero-slide active"></div>
        <div class="hero-slide"></div>
        <div class="hero-slide"></div>
    </div>

    <!-- Particles Canvas Layer (between slider and content) -->
    <canvas id="heroParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">
        Your browser doesn't support Canvas.
    </canvas>

    <!-- Slider Indicators -->
    <div class="slider-indicators">
        <div class="slider-dot active" onclick="goToSlide(0)"></div>
        <div class="slider-dot" onclick="goToSlide(1)"></div>
        <div class="slider-dot" onclick="goToSlide(2)"></div>
    </div>

    <!-- Hero Content -->
    <div class="hero-content max-w-7xl mx-auto text-center md:text-left px-4 sm:px-6">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight" id="hero-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">
            Professional <span class="text-blue-300">Panel Manufacturing</span><br>& Control System Solutions
        </h1>
        <p class="text-lg sm:text-xl text-gray-300 mb-6 sm:mb-8 max-w-2xl mx-auto md:mx-0" id="hero-description" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
            Specialized manufacturer of electrical control panels and control panel systems. We deliver reliable, customized solutions for industrial automation and control applications across various industries.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center md:justify-start" id="hero-buttons">
            <a href="contact.html" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold transition shadow-lg">
                Contact Us
            </a>
            <a href="#about" class="bg-transparent border-2 border-blue-500 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition">
                Learn More
            </a>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="py-8 sm:py-12 px-4 sm:px-6 relative overflow-hidden fade-section">
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
        <div class="text-center mb-6 md:mb-4">
            <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-4 about-title section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">COMPANY PROFILE</h2>
            <div class="w-20 h-1 bg-blue-500 mx-auto mb-2 about-underline"></div>
        </div>
        <!-- Main About Content -->
        <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 items-start mt-6 md:mt-8 mb-6 md:mb-8">
			<div class="order-2 lg:order-1 pr-4 md:pr-6 lg:pr-8">
                <div class="relative group">
					<div class="container">
						<div class="map-container">
							<div class="map-inner">
								<img src="http://res.cloudinary.com/slzr/image/upload/v1500321012/world-map-1500_vvekl5.png" alt="World map" class="w-full h-[19rem] object-cover">
								<div class="point batam tippy" title="Batam, Indonesia"></div>
                            </div>
                            </div>
                        </div>
					<style>
						.map-container{padding:1.2rem .8rem;position:relative;display:inline-block;width:100%}
						.map-container .map-inner{position:relative;margin:0 auto;transform:scale(1.0);transform-origin:74% 62%;}
						@media(min-width:1024px){.map-container .map-inner{transform:scale(1.1);transform-origin:74% 62%;}}
						.map-container img{width:100%}
						.map-container .point{cursor:pointer;position:absolute;width:12px;height:12px;background-color:#ffffff;border-radius:50%;transition:all .3s ease;will-change:transform,box-shadow;transform:translate(-50%,-50%);box-shadow:0 0 0 rgba(255,255,255,.4);animation:pulse 3s infinite}
						.map-container .point:hover{animation:none;transform:translate(-50%,-50%) scale(1.35);box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)}
						/* Focus: ASEAN (zoomed). Single point for Batam */
						.map-container .batam{top:59.0%;left:78.0%}
						@keyframes pulse{0%{box-shadow:0 0 0 0 rgba(255,255,255,.5)}70%{box-shadow:0 0 0 25px rgba(255,255,255,0)}100%{box-shadow:0 0 0 0 rgba(255,255,255,0)}}
					</style>
                </div>
            </div>

            <div class="order-1 lg:order-2 lg:min-h-[20rem] flex flex-col">
                <!-- Short About preview (no Read More) -->
                <div class="mission-content">
                    <p class="text-gray-300 mb-6 text-lg leading-relaxed" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
                        EPBOX ENGINEERING Pte. Ltd. is a trusted innovator in the design and manufacturing of intelligent control panels
                        and industrial automation solutions. We deliver systems that empower our clients with reliability, precision,
                        and adaptability in the most demanding environments true to our motto
                        <span class="italic">"Beyond Boundaries, We Command Control".</span>
                    </p>

                    <!-- Company Profile Items -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <h3 class="text-white" style="font-family: 'Roboto', sans-serif; font-weight: 400; letter-spacing: 0.3px;">Intelligent Control Panel Design & Manufacturing</h3>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <h3 class="text-white" style="font-family: 'Roboto', sans-serif; font-weight: 400; letter-spacing: 0.3px;">Industrial Automation Solutions</h3>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <h3 class="text-white" style="font-family: 'Roboto', sans-serif; font-weight: 400; letter-spacing: 0.3px;">Reliability, Precision & Adaptability</h3>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                            <h3 class="text-white" style="font-family: 'Roboto', sans-serif; font-weight: 400; letter-spacing: 0.3px;">Most Demanding Environments</h3>
                        </div>
                    </div>

                </div>



                <div class="flex flex-col sm:flex-row gap-4 mt-6">
                    <a href="{{ route('site.contact') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">
                        Get Free Quote
                    </a>
                    <a href="{{ route('site.about') }}"
                        class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tooltip container -->
    <div id="tooltip"
        class="fixed bg-gray-900 text-white px-3 py-2 rounded-lg text-sm shadow-lg opacity-0 pointer-events-none z-50 transition-opacity duration-300">
    </div>

    <!-- Value Details Modal -->
    <div id="valueModal"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="bg-gray-800 rounded-lg p-8 max-w-md mx-4 transform scale-95 transition-transform duration-300">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-blue-300" id="modalTitle"></h3>
                <button onclick="closeValueModal()" class="text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div id="modalContent" class="text-gray-300"></div>
        </div>
    </div>
</section>

<!-- Our Capabilities Section -->
<section id="offer-services" class="py-16 px-6 gradient-bg relative overflow-hidden fade-section">
    <!-- Canvas Background -->
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400 rounded-full blur-2xl animate-pulse delay-500"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-4 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR CAPABILITIES</h2>
            <div class="w-32 h-1 bg-white mx-auto mb-4"></div>
        </div>

        <!-- Capabilities Grid Layout -->
        <div class="capabilities-container">
            <ul class="capabilities-grid">
                <!-- Control Panel Engineering -->
                <li class="capability-item control-panel">
                    <h3 class="capability-title">CONTROL PANEL ENGINEERING</h3>
                    <p class="capability-description">We design and manufacture a wide range of Low Voltage control panels, tailored to operational and environmental</p>
                    <a href="{{ route('site.service.control') }}" class="capability-link">Learn More</a>
                </li>

                <!-- Automation Integration -->
                <li class="capability-item automation">
                    <h3 class="capability-title">AUTOMATION INTEGRATION</h3>
                    <p class="capability-description">Seamless integration of PLC, SCADA, and HMI systems for intelligent industrial automation solutions.</p>
                    <a href="{{ route('site.service.automation') }}" class="capability-link">Learn More</a>
                </li>

                <!-- System Integration Solutions -->
                <li class="capability-item system-integration">
                    <h3 class="capability-title">SYSTEM INTEGRATION SOLUTIONS</h3>
                    <p class="capability-description">Our goal is to ensure all system layers, from field devices to enterprise platforms, work seamlessly together.</p>
                    <a href="{{ route('site.service.system') }}" class="capability-link">Learn More</a>
                </li>

                <!-- Engineering & Technical Support -->
                <li class="capability-item engineering">
                    <h3 class="capability-title">ENGINEERING & TECHNICAL SUPPORT</h3>
                    <p class="capability-description">We provide end-to-end engineering support across the project lifecycle.</p>
                    <a href="{{ route('site.service.engineering') }}" class="capability-link">Learn More</a>
                </li>

                <!-- Safety & Compliance by Design -->
                <li class="capability-item safety">
                    <h3 class="capability-title">SAFETY & COMPLIANCE BY DESIGN</h3>
                    <p class="capability-description">Every solution is developed with safety as a core principle.</p>
                    <a href="{{ route('site.service.safety') }}" class="capability-link">Learn More</a>
                </li>
            </ul>
        </div>

        <!-- CTA Row (bottom of combined section) -->
        <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Our Services</a>
            <a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 transform hover:scale-105">See Our Projects</a>
        </div>
    </div>
</section>

<!-- Compliance & Certifications Section2 -->
<section id="why-choose" class="py-20 px-6 relative overflow-hidden fade-section">
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
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">COMPLIANCE & CERTIFICATIONS</h2>
            <div class="w-32 h-1 bg-blue-500 mx-auto mb-6"></div>
            <p class="text-gray-300 max-w-3xl mx-auto">Our panels are manufactured and tested in compliance with:</p>
        </div>
        <!-- Horizontal Cards with Icons -->
        <div class="space-y-4 mb-12">
            <!-- Row 1 -->
            <div class="grid md:grid-cols-3 gap-4">
                <!-- IEC Standards -->
                <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300">
                    <div class="flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-check-circle text-white text-lg"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg font-semibold text-white group-hover:text-blue-300 transition-colors">IEC Standards</h3>
                        <p class="text-gray-300 text-sm">International Electrotechnical Commission</p>
                    </div>
                </div>

                <!-- NEMA Standards -->
                <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-red-400/40 transition-all duration-300">
                    <div class="flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-industry text-white text-lg"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg font-semibold text-white group-hover:text-red-300 transition-colors">NEMA Standards</h3>
                        <p class="text-gray-300 text-sm">National Electrical Manufacturers Association</p>
                    </div>
                </div>

                <!-- ATEX Certification -->
                <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-green-400/40 transition-all duration-300">
                    <div class="flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-certificate text-white text-lg"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg font-semibold text-white group-hover:text-green-300 transition-colors">ATEX Certification</h3>
                        <p class="text-gray-300 text-sm">European Directive for explosive atmospheres</p>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="grid md:grid-cols-3 gap-4">
                <!-- IECEx Certification -->
                <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-purple-400/40 transition-all duration-300">
                    <div class="flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-shield-alt text-white text-lg"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg font-semibold text-white group-hover:text-purple-300 transition-colors">IECEx Certification</h3>
                        <p class="text-gray-300 text-sm">International explosion-proof standard</p>
                    </div>
                </div>

                <!-- ABS Compliance -->
                <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-cyan-400/40 transition-all duration-300">
                    <div class="flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-anchor text-white text-lg"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg font-semibold text-white group-hover:text-cyan-300 transition-colors">ABS Compliance</h3>
                        <p class="text-gray-300 text-sm">American Bureau of Shipping classification society</p>
                    </div>
                </div>

                <!-- DNV Compliance -->
                <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-teal-400/40 transition-all duration-300">
                    <div class="flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-ship text-white text-lg"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-lg font-semibold text-white group-hover:text-teal-300 transition-colors">DNV Compliance</h3>
                        <p class="text-gray-300 text-sm">Marine and offshore classification society</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <p class="text-[#aab8d3] max-w-4xl mx-auto">All Explosion Proof Panels are designed and fabricated using Aluminum or SS316 enclosures, ensuring corrosion resistance and long-term durability in offshore and petrochemical environments.</p>
        </div>
    </div>
</section>

<!-- Project Highlights Section -->
<section id="project-highlights" class="py-20 px-6 relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/epbox/gambar34.png') }}'); background-size: 120%;"></div>
	<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.7), rgba(15,28,63,0.9));"></div>
	<!-- Decorative Shapes Overlay -->
	<div class="absolute inset-0 opacity-70 pointer-events-none">
		<div class="absolute -top-10 left-8 w-48 h-48 bg-blue-500/30 rounded-full blur-3xl"></div>
		<div class="absolute top-1/3 right-12 w-64 h-64 bg-indigo-500/25 rounded-full blur-3xl"></div>
		<div class="absolute bottom-10 left-1/4 w-56 h-56 bg-blue-400/20 rounded-full blur-3xl"></div>
	</div>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="mb-8">
			<div class="inline-block">
				<h2 class="text-3xl md:text-4xl lg:text-4xl font-bold section-title mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">PROJECT HIGHLIGHTS</h2>
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
		</div>

		<!-- View All Projects Button -->
		<div class="text-center">
			<a href="{{ route('site.portfolio.index') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
				<i class="fas fa-images"></i>
				<span>View All Projects</span>
				<i class="fas fa-arrow-right"></i>
			</a>
		</div>
	</div>
</section>

<!-- Industries We Serve - Redesigned -->
<section id="industries" class="pt-20 pb-12 px-6 relative overflow-hidden fade-section" style="padding-top: 5rem;">
    <!-- Canvas Background -->
    <canvas id="x-canvas" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <!-- Interactive Background Elements (reusing site style) -->
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
        <div class="flex items-end justify-between mb-8">
            <div>
                <div class="inline-block">
                    <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold section-title mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">INDUSTRIES WE SERVE</h2>
                    <div class="h-1 bg-white w-full mb-3"></div>
                </div>
            </div>
            <div class="hidden md:flex gap-3">
                <a href="#projects" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 transition text-white font-semibold">
                    <i class="fas fa-images"></i>
                    <span>See Projects</span>
                </a>
                <a href="{{ route('site.contact') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-blue-500 hover:bg-blue-900 transition text-white font-semibold">
                    <i class="fas fa-headset"></i>
                    <span>Talk to Expert</span>
                </a>
            </div>
        </div>

        <!-- Reused card grid from home: Industries We Serve -->
		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
			<div class="group relative rounded-sm border border-white/10 bg-white/5 overflow-hidden hover:border-blue-400/40 transition">
				<!-- Image area -->
				<div class="relative h-80 md:h-96">
					<img src="{{ asset('img/epbox/oilgas.png') }}" alt="Oil & Gas" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
					<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.35), rgba(15,28,63,0.7));"></div>
					<div class="absolute top-3 left-3 w-10 h-10 rounded-sm bg-blue-600 text-white flex items-center justify-center shadow"><i class="fas fa-oil-can"></i></div>
					<!-- Text overlay on image -->
					<div class="absolute inset-0 z-10 p-5 flex flex-col gap-2 items-center justify-center text-center">
						<h3 class="text-xl font-semibold text-white">Oil & Gas</h3>
						<p class="text-gray-200 text-sm">End‑to‑end controls for upstream to downstream — SCADA, shutdown systems, and ATEX/IECEx‑compliant solutions for FPSO, refinery, and onshore operations.</p>
					</div>
				</div>
			</div>

			<div class="group relative rounded-sm border border-white/10 bg-white/5 overflow-hidden hover:border-blue-400/40 transition">
				<div class="relative h-80 md:h-96">
					<img src="{{ asset('img/epbox/automat.png') }}" alt="Power Generation & Clean Energy" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
					<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.35), rgba(15,28,63,0.7));"></div>
					<div class="absolute top-3 left-3 w-10 h-10 rounded-sm bg-blue-600 text-white flex items-center justify-center shadow"><i class="fas fa-bolt"></i></div>
					<div class="absolute inset-0 z-10 p-5 flex flex-col gap-2 items-center justify-center text-center">
						<h3 class="text-xl font-semibold text-white">Power Generation & Clean Energy</h3>
						<p class="text-gray-200 text-sm">Substation controls, switchgear, and solar/wind integration with telemetry — designed for energy efficiency and supply reliability.</p>
					</div>
				</div>
			</div>

			<div class="group relative rounded-sm border border-white/10 bg-white/5 overflow-hidden hover:border-blue-400/40 transition">
				<div class="relative h-80 md:h-96">
					<img src="{{ asset('img/epbox/center.png') }}" alt="Data Centres & Industrial Automation" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
					<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.35), rgba(15,28,63,0.7));"></div>
					<div class="absolute top-3 left-3 w-10 h-10 rounded-sm bg-blue-600 text-white flex items-center justify-center shadow"><i class="fas fa-database"></i></div>
					<div class="absolute inset-0 z-10 p-5 flex flex-col gap-2 items-center justify-center text-center">
						<h3 class="text-xl font-semibold text-white">Data Centres & Industrial Automation</h3>
						<p class="text-gray-200 text-sm">LV distribution, UPS/BMS integration, and redundant controls with a focus on real-time monitoring and network security.</p>
					</div>
				</div>
			</div>

			<div class="group relative rounded-sm border border-white/10 bg-white/5 overflow-hidden hover:border-blue-400/40 transition">
				<div class="relative h-80 md:h-96">
					<img src="{{ asset('img/epbox/building.png') }}" alt="Building Infrastructure" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
					<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.35), rgba(15,28,63,0.7));"></div>
					<div class="absolute top-3 left-3 w-10 h-10 rounded-sm bg-blue-600 text-white flex items-center justify-center shadow"><i class="fas fa-building"></i></div>
					<div class="absolute inset-0 z-10 p-5 flex flex-col gap-2 items-center justify-center text-center">
						<h3 class="text-xl font-semibold text-white">Building Infrastructure</h3>
						<p class="text-gray-200 text-sm">Smart building automation systems including HVAC controls, lighting management, security systems, and energy optimization for commercial and industrial facilities.</p>
					</div>
				</div>
			</div>

			<div class="group relative rounded-sm border border-white/10 bg-white/5 overflow-hidden hover:border-blue-400/40 transition">
				<div class="relative h-80 md:h-96">
					<img src="{{ asset('img/epbox/water.png') }}" alt="Water Treatment" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
					<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.35), rgba(15,28,63,0.7));"></div>
					<div class="absolute top-3 left-3 w-10 h-10 rounded-sm bg-blue-600 text-white flex items-center justify-center shadow"><i class="fas fa-tint"></i></div>
					<div class="absolute inset-0 z-10 p-5 flex flex-col gap-2 items-center justify-center text-center">
						<h3 class="text-xl font-semibold text-white">Water Treatment</h3>
						<p class="text-gray-200 text-sm">Integrated control systems for water treatment facilities, ensuring operational efficiency and sustainability.</p>
					</div>
				</div>
			</div>

			<div class="group relative rounded-sm border border-white/10 bg-white/5 overflow-hidden hover:border-blue-400/40 transition">
				<div class="relative h-80 md:h-96">
					<img src="{{ asset('img/epbox/marine.png') }}" alt="Marine & Offshore Systems" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
					<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.35), rgba(15,28,63,0.7));"></div>
					<div class="absolute top-3 left-3 w-10 h-10 rounded-sm bg-blue-600 text-white flex items-center justify-center shadow"><i class="fas fa-ship"></i></div>
					<div class="absolute inset-0 z-10 p-5 flex flex-col gap-2 items-center justify-center text-center">
						<h3 class="text-xl font-semibold text-white">Marine & Offshore Systems</h3>
						<p class="text-gray-200 text-sm">Electrical panel solutions for FPSO and offshore vessels, including EX-proof designs and ABS/DNV compliance.</p>
					</div>
				</div>
			</div>
		</div>
        
        <!-- Industries CTA Button -->
        <div class="text-center mt-12">
            <a href="{{ route('site.industries') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
                <i class="fas fa-industry"></i>
                <span>Explore Show Case Industries</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Ready Work With Us Section -->
<section class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
    <div class="max-w-7xl mx-auto relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Work With Us?</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Let's discuss your control panel requirements and how we can help bring your industrial automation vision to life.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Get Free Quote</a>
            <a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">View Our Projects</a>
        </div>
    </div>
</section>

<!-- Contact Modal -->
<div id="contactModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
    <div id="contactBackdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm pointer-events-none opacity-0 transition-opacity duration-300"></div>
    <div class="relative z-10 w-full max-w-3xl px-4">
        <div id="contactPanel" class="bg-gray-900/70 backdrop-blur-lg rounded-lg p-6 md:p-8 border border-gray-700/70 shadow-2xl transform-gpu transition-all duration-300 opacity-0 translate-y-4 scale-95">
            <div class="flex items-start justify-between mb-4">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Stay Connected</h3>
                    <p class="text-gray-300 mt-1">Tell us about your project. We’ll get back within 24 hours.</p>
                </div>
                <button aria-label="Close" class="text-gray-400 hover:text-white transition" onclick="closeContactModal()">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form class="grid md:grid-cols-2 gap-6 items-start">
                <div class="space-y-6">
                    <div>
                        <label for="modal_name" class="block mb-2 text-gray-300">Full Name</label>
                        <input type="text" id="modal_name" class="w-full px-4 py-3 bg-gray-900/80 border border-gray-700/70 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="Your Name">
                    </div>
                    <div>
                        <label for="modal_email" class="block mb-2 text-gray-300">Email Address</label>
                        <input type="email" id="modal_email" class="w-full px-4 py-3 bg-gray-900/80 border border-gray-700/70 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="your@email.com">
                    </div>
                    <div>
                        <label for="modal_company" class="block mb-2 text-gray-300">Company</label>
                        <input type="text" id="modal_company" class="w-full px-4 py-3 bg-gray-900/80 border border-gray-700/70 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="Company Name">
                    </div>
                </div>
                <div>
                    <label for="modal_message" class="block mb-2 text-gray-300">Project Details</label>
                    <textarea id="modal_message" rows="8" class="w-full h-full min-h-[220px] md:min-h-[260px] px-4 py-3 bg-gray-900/80 border border-gray-700/70 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="Tell us about your project requirements"></textarea>
                </div>
                <div class="md:col-span-2">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">Send Request</button>
                </div>
            </form>
        </div>
    </div>
    <div class="sr-only" aria-live="polite"></div>
</div>

<!-- Chat Box -->
<div class="chat-box" onclick="toggleChat()">
    <i class="fas fa-comments"></i>
</div>

<div class="chat-popup" id="chatPopup">
    <div class="chat-header">
        <h3>Chat with Epy-Ai Assistant</h3>
        <button class="close-chat" onclick="toggleChat()">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="chat-body">
        <input type="text" id="chatMessage" class="chat-input" placeholder="Type your message...">
        <div class="chat-actions">
            <button class="chat-btn primary" onclick="sendMessage()">Send</button>
            <button class="chat-btn secondary" onclick="scrollToContact()">Contact Form</button>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/site.css') }}">
<style>
/* Compliance Image Sharp Corners */
#compliance-section img {
    border-radius: 0 !important;
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="{{ asset('js/site.js') }}"></script>
@endpush