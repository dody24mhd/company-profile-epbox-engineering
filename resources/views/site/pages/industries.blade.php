@extends('site.layouts.app')
@section('title','Industries Served | Epbox Engineering | Industrial Automation Solutions')
@section('content')
<!-- Hero Section -->
<section class="pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 gradient-bg relative overflow-hidden fade-section">
	<!-- Canvas Background -->
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h1 class="text-4xl md:text-6xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">INDUSTRIES <span class="text-blue-300">WE SERVE</span></h1>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Epbox Engineering delivers cutting-edge control panel solutions across diverse industrial sectors, ensuring operational excellence and safety compliance for businesses worldwide.</p>
	</div>
</section>

<!-- Key Industries Grid -->
<section id="key-industries" class="py-16 px-8 bg-[#0A1128] relative overflow-hidden fade-section">
	<!-- Canvas Background -->
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="floating-orb orb1"></div>
	<div class="floating-orb orb2"></div>
	<div class="floating-orb orb3"></div>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-8">
			<h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">INDUSTRIES WE SERVE</h2>
			<div class="w-20 h-1 bg-blue-500 mx-auto mb-4"></div>
			<p class="text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">From oil & gas to renewable energy, we provide specialized control panel solutions across diverse industrial sectors with proven expertise and compliance standards.</p>
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
	</div>
</section>

<!-- Industry Case Sections (TOM Slider) -->
<section class="py-10 relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.25;"></canvas>
	<div class="relative z-10">
		<div class="tom-slider">
			<button class="tom-control tom-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
			<button class="tom-control tom-next" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
			<div class="tom-track">
				<!-- Slide 1: Oil & Gas -->
				<div class="tom-slide">
					<article class="tom-block is-visible">
						<div class="tom-media tom-grad">
							<picture>
								<img src="{{ asset('img/epbox/oilgas.png') }}" alt="Oil & Gas – FPSO & Refinery" loading="lazy">
							</picture>
							<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.5), rgba(15,28,63,0.65));"></div>
						</div>
						<div class="tom-content center">
							<div class="tom-eyebrow">Oil & Gas</div>
							<h3 class="tom-title">F&G, DCS/SCADA, EX‑proof Panels</h3>
						<p class="tom-desc">End‑to‑end solutions for FPSO, refineries, and onshore—ATEX/IECEx compliant, FAT/SAT verified.</p>
									<div class="tom-cta">
								<a href="#" onclick="openDemoModal('oilgas')"><i class="fas fa-arrow-right"></i> View Services</a>
									</div>
								</div>
							</article>
						</div>
						<!-- Slide 2: Power -->
				<div class="tom-slide">
					<article class="tom-block is-visible">
						<div class="tom-media tom-grad">
							<picture>
								<img src="{{ asset('img/epbox/automat.png') }}" alt="Power & Clean Energy" loading="lazy">
							</picture>
							<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.5), rgba(15,28,63,0.65));"></div>
						</div>
						<div class="tom-content center">
							<div class="tom-eyebrow">Power & Clean Energy</div>
							<h3 class="tom-title">Substation & Switchgear Automation</h3>
						<p class="tom-desc">Solar/wind integration, telemetry, and energy optimization for efficiency and supply reliability.</p>
									<div class="tom-cta">
								<a href="#" onclick="openDemoModal('power')"><i class="fas fa-arrow-right"></i> View Services</a>
									</div>
								</div>
							</article>
						</div>
						<!-- Slide 3: Data Centres -->
				<div class="tom-slide">
					<article class="tom-block is-visible">
						<div class="tom-media tom-grad">
							<picture>
								<img src="{{ asset('img/epbox/center.png') }}" alt="Data Centres & Industrial Automation" loading="lazy">
							</picture>
							<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.5), rgba(15,28,63,0.65));"></div>
						</div>
						<div class="tom-content center">
							<div class="tom-eyebrow">Data Centres</div>
							<h3 class="tom-title">Redundant Controls & Monitoring</h3>
						<p class="tom-desc">LV distribution, UPS/BMS integration, network security, and real‑time monitoring.</p>
									<div class="tom-cta">
								<a href="#" onclick="openDemoModal('datacenter')"><i class="fas fa-arrow-right"></i> View Services</a>
									</div>
								</div>
							</article>
						</div>
						<!-- Slide 4: Marine -->
				<div class="tom-slide">
					<article class="tom-block is-visible">
						<div class="tom-media tom-grad">
							<picture>
								<img src="{{ asset('img/epbox/marine.png') }}" alt="Marine & Offshore" loading="lazy">
							</picture>
							<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.5), rgba(15,28,63,0.65));"></div>
						</div>
						<div class="tom-content center">
							<div class="tom-eyebrow">Marine & Offshore</div>
							<h3 class="tom-title">EX‑proof Electrical Panels</h3>
						<p class="tom-desc">ABS/DNV compliance, corrosion‑resistant design, and reliability for offshore operations.</p>
									<div class="tom-cta">
								<a href="#" onclick="openDemoModal('marine')"><i class="fas fa-arrow-right"></i> View Services</a>
									</div>
								</div>
							</article>
						</div>
					</div>
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

<!-- Ready to Transform Your Industry Section -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<!-- Canvas Background -->
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">READY TO START YOUR <span class="text-blue-300">PROJECT?</span></h2>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-8"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto mb-12" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Partner with EPBOX ENGINEERING to revolutionize your industrial processes with cutting-edge control panel solutions tailored to your specific industry requirements.</p>
		<div class="flex flex-col sm:flex-row gap-6 justify-center">
			<a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
				Get Industry Solution Quote
			</a>
			<a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">
				View Our Industry Projects
			</a>
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

<!-- Demo Modals -->
<!-- Oil & Gas Demo Modal -->
<div id="oilgasModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
	<div class="bg-gray-800 rounded-lg p-8 max-w-4xl mx-4 transform scale-95 transition-transform duration-300 max-h-[90vh] overflow-y-auto">
		<div class="flex justify-between items-center mb-6">
			<h3 class="text-2xl font-bold text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Oil & Gas - FPSO Case Study</h3>
			<button onclick="closeDemoModal()" class="text-gray-400 hover:text-white transition-colors">
				<i class="fas fa-times text-xl"></i>
			</button>
		</div>
		<div class="grid md:grid-cols-2 gap-6">
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Project Overview</h4>
				<p class="text-gray-300 mb-4">MODEC FPSO project requiring explosion-proof control panels for hazardous environments with ATEX/IECEx certification.</p>
				
				<h4 class="text-lg font-semibold text-white mb-3">Technology Used</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• Fire & Gas Detection Systems</li>
					<li>• DCS/SCADA Integration</li>
					<li>• EX-proof Enclosures (ATEX Zone 1)</li>
					<li>• Emergency Shutdown Systems</li>
					<li>• HMI with Redundant Displays</li>
				</ul>
			</div>
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Solutions Provided</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• Complete F&G panel design & manufacturing</li>
					<li>• ATEX/IECEx certified enclosures</li>
					<li>• FAT/SAT testing & commissioning</li>
					<li>• Emergency response integration</li>
					<li>• 24/7 technical support</li>
				</ul>
				
				<h4 class="text-lg font-semibold text-white mb-3 mt-6">Results</h4>
				<p class="text-gray-300">Zero safety incidents, 99.9% uptime, full compliance with international safety standards.</p>
			</div>
		</div>
	</div>
</div>

<!-- Power & Clean Energy Demo Modal -->
<div id="powerModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
	<div class="bg-gray-800 rounded-lg p-8 max-w-4xl mx-4 transform scale-95 transition-transform duration-300 max-h-[90vh] overflow-y-auto">
		<div class="flex justify-between items-center mb-6">
			<h3 class="text-2xl font-bold text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Power & Clean Energy - Substation Automation</h3>
			<button onclick="closeDemoModal()" class="text-gray-400 hover:text-white transition-colors">
				<i class="fas fa-times text-xl"></i>
			</button>
		</div>
		<div class="grid md:grid-cols-2 gap-6">
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Project Overview</h4>
				<p class="text-gray-300 mb-4">Smart grid integration project combining solar/wind energy with traditional power distribution systems.</p>
				
				<h4 class="text-lg font-semibold text-white mb-3">Technology Used</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• Substation Automation Systems</li>
					<li>• Switchgear Control Panels</li>
					<li>• SCADA with Telemetry</li>
					<li>• Energy Management Systems</li>
					<li>• Grid Synchronization Controls</li>
				</ul>
			</div>
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Solutions Provided</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• Complete substation automation</li>
					<li>• Renewable energy integration</li>
					<li>• Real-time monitoring & control</li>
					<li>• Grid stability optimization</li>
					<li>• Remote diagnostics & maintenance</li>
				</ul>
				
				<h4 class="text-lg font-semibold text-white mb-3 mt-6">Results</h4>
				<p class="text-gray-300">30% energy efficiency improvement, 40% reduction in maintenance costs, enhanced grid reliability.</p>
			</div>
		</div>
	</div>
</div>

<!-- Data Center Demo Modal -->
<div id="datacenterModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
	<div class="bg-gray-800 rounded-lg p-8 max-w-4xl mx-4 transform scale-95 transition-transform duration-300 max-h-[90vh] overflow-y-auto">
		<div class="flex justify-between items-center mb-6">
			<h3 class="text-2xl font-bold text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Data Center - Redundant Control Systems</h3>
			<button onclick="closeDemoModal()" class="text-gray-400 hover:text-white transition-colors">
				<i class="fas fa-times text-xl"></i>
			</button>
		</div>
		<div class="grid md:grid-cols-2 gap-6">
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Project Overview</h4>
				<p class="text-gray-300 mb-4">Mission-critical data center requiring 99.99% uptime with redundant power and cooling systems.</p>
				
				<h4 class="text-lg font-semibold text-white mb-3">Technology Used</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• LV Distribution Panels</li>
					<li>• UPS/BMS Integration</li>
					<li>• Redundant Control Systems</li>
					<li>• Network Security Protocols</li>
					<li>• Real-time Monitoring Systems</li>
				</ul>
			</div>
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Solutions Provided</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• Redundant power distribution</li>
					<li>• Integrated UPS/BMS systems</li>
					<li>• 24/7 monitoring & alerting</li>
					<li>• Network security implementation</li>
					<li>• Predictive maintenance systems</li>
				</ul>
				
				<h4 class="text-lg font-semibold text-white mb-3 mt-6">Results</h4>
				<p class="text-gray-300">99.99% uptime achieved, 50% reduction in downtime, enhanced security and reliability.</p>
			</div>
		</div>
	</div>
</div>

<!-- Marine & Offshore Demo Modal -->
<div id="marineModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
	<div class="bg-gray-800 rounded-lg p-8 max-w-4xl mx-4 transform scale-95 transition-transform duration-300 max-h-[90vh] overflow-y-auto">
		<div class="flex justify-between items-center mb-6">
			<h3 class="text-2xl font-bold text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Marine & Offshore - EX-proof Panels</h3>
			<button onclick="closeDemoModal()" class="text-gray-400 hover:text-white transition-colors">
				<i class="fas fa-times text-xl"></i>
			</button>
		</div>
		<div class="grid md:grid-cols-2 gap-6">
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Project Overview</h4>
				<p class="text-gray-300 mb-4">Offshore platform requiring explosion-proof electrical panels with ABS/DNV compliance for harsh marine environment.</p>
				
				<h4 class="text-lg font-semibold text-white mb-3">Technology Used</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• EX-proof Electrical Panels</li>
					<li>• Corrosion-resistant Enclosures</li>
					<li>• ABS/DNV Certified Systems</li>
					<li>• Marine-grade Components</li>
					<li>• Environmental Monitoring</li>
				</ul>
			</div>
			<div>
				<h4 class="text-lg font-semibold text-white mb-3">Solutions Provided</h4>
				<ul class="text-gray-300 space-y-2">
					<li>• EX-proof panel design & manufacturing</li>
					<li>• ABS/DNV compliance certification</li>
					<li>• Corrosion-resistant materials</li>
					<li>• Marine environment testing</li>
					<li>• Offshore installation support</li>
				</ul>
				
				<h4 class="text-lg font-semibold text-white mb-3 mt-6">Results</h4>
				<p class="text-gray-300">Full compliance achieved, 25-year service life, zero corrosion issues in harsh marine environment.</p>
			</div>
		</div>
	</div>
</div>

<script>
function openDemoModal(type) {
	const modal = document.getElementById(type + 'Modal');
	modal.classList.remove('opacity-0', 'pointer-events-none');
	modal.classList.add('opacity-100');
	modal.querySelector('.transform').classList.remove('scale-95');
	modal.querySelector('.transform').classList.add('scale-100');
	document.body.style.overflow = 'hidden';
}

function closeDemoModal() {
	const modals = document.querySelectorAll('[id$="Modal"]');
	modals.forEach(modal => {
		modal.classList.add('opacity-0', 'pointer-events-none');
		modal.classList.remove('opacity-100');
		modal.querySelector('.transform').classList.add('scale-95');
		modal.querySelector('.transform').classList.remove('scale-100');
	});
	document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.addEventListener('click', function(e) {
	if (e.target.classList.contains('fixed') && e.target.classList.contains('inset-0')) {
		closeDemoModal();
	}
});
</script>

@endsection