@extends('site.layouts.app')
@section('title','Oil & Gas Solutions | EPBOX Engineering | Industrial Control Panel Systems')
@section('content')

<!-- Breadcrumb Navigation -->
<section class="pt-24 pb-4 px-6 bg-[#0A1128]">
	<div class="max-w-7xl mx-auto">
		<nav class="flex items-center space-x-2 text-sm">
			<a href="{{ route('site.home') }}" class="text-gray-400 hover:text-blue-400 transition-colors">
				<i class="fas fa-home mr-1"></i>Home
			</a>
			<i class="fas fa-chevron-right text-gray-500"></i>
			<a href="{{ route('site.industries') }}" class="text-gray-400 hover:text-blue-400 transition-colors">
				Industries
			</a>
			<i class="fas fa-chevron-right text-gray-500"></i>
			<span class="text-blue-400">Oil & Gas</span>
		</nav>
	</div>
</section>

<!-- Hero Section -->
<section class="pt-8 pb-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<!-- Canvas Background -->
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h1 class="text-4xl md:text-6xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OIL & GAS <span class="text-blue-300">SOLUTIONS</span></h1>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Specialized control panel systems and automation solutions for upstream, midstream, and downstream oil & gas operations with ATEX/IECEx compliance and marine-grade certifications.</p>
	</div>
</section>

<!-- Industry Overview -->
<section class="py-20 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="floating-orb orb1"></div>
	<div class="floating-orb orb2"></div>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="grid lg:grid-cols-2 gap-12 items-center">
			<div>
				<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">UPSTREAM TO DOWNSTREAM EXCELLENCE</h2>
				<div class="w-20 h-1 bg-blue-500 mb-6"></div>
				<p class="text-gray-300 mb-6" style="text-align: justify; text-justify: inter-word;">From offshore drilling platforms to onshore refineries, EPBOX Engineering delivers robust control panel solutions designed to withstand the harshest environments. Our systems ensure operational safety, regulatory compliance, and maximum uptime across the entire oil & gas value chain.</p>
				<div class="space-y-4">
					<div class="flex items-center">
						<i class="fas fa-check-circle text-green-400 mr-3"></i>
						<span class="text-gray-300">ATEX Zone 1 & 2 Certified Panels</span>
					</div>
					<div class="flex items-center">
						<i class="fas fa-check-circle text-green-400 mr-3"></i>
						<span class="text-gray-300">IECEx International Standards</span>
					</div>
					<div class="flex items-center">
						<i class="fas fa-check-circle text-green-400 mr-3"></i>
						<span class="text-gray-300">ABS/DNV Marine Compliance</span>
					</div>
					<div class="flex items-center">
						<i class="fas fa-check-circle text-green-400 mr-3"></i>
						<span class="text-gray-300">24/7 Remote Monitoring Capabilities</span>
					</div>
				</div>
			</div>
			<div class="relative">
				<img src="{{ asset('img/epbox/industri1.png') }}" alt="Oil & Gas Control Systems" class="rounded-lg shadow-2xl">
				<div class="absolute -bottom-6 -right-6 w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center">
					<i class="fas fa-oil-can text-white text-2xl"></i>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Case Studies Section -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">REAL-WORLD APPLICATIONS</h2>
			<div class="w-20 h-1 bg-blue-500 mx-auto mb-4"></div>
			<p class="text-gray-300 max-w-3xl mx-auto">Explore our successful implementations across various oil & gas operations, showcasing the versatility and reliability of our control panel systems.</p>
		</div>

		<div class="grid lg:grid-cols-2 gap-8 mb-12">
			<!-- Case Study 1: FPSO Control System -->
			<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-8 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300">
				<div class="flex items-center mb-6">
					<div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
						<i class="fas fa-ship text-white text-2xl"></i>
					</div>
					<div>
						<h3 class="text-xl font-bold text-white">FPSO Control System</h3>
						<p class="text-gray-400 text-sm">Offshore Production Platform</p>
					</div>
				</div>
				<div class="space-y-4">
					<div class="bg-gray-800/50 rounded-lg p-4">
						<h4 class="font-semibold text-blue-300 mb-2">Challenge</h4>
						<p class="text-gray-300 text-sm">A floating production storage and offloading (FPSO) vessel required a comprehensive control system to manage crude oil processing, gas compression, and safety systems in a harsh marine environment with explosive atmosphere zones.</p>
					</div>
					<div class="bg-gray-800/50 rounded-lg p-4">
						<h4 class="font-semibold text-green-300 mb-2">Solution</h4>
						<p class="text-gray-300 text-sm">Deployed ATEX Zone 1 certified control panels with marine-grade enclosures, integrated SCADA system for real-time monitoring, and redundant safety shutdown systems (SIS) compliant with IEC 61511 standards.</p>
					</div>
					<div class="bg-gray-800/50 rounded-lg p-4">
						<h4 class="font-semibold text-yellow-300 mb-2">Results</h4>
						<p class="text-gray-300 text-sm">Achieved 99.8% uptime, reduced maintenance costs by 35%, and ensured full compliance with ABS and DNV marine standards. The system successfully handled 50,000 barrels per day production capacity.</p>
					</div>
				</div>
			</div>

			<!-- Case Study 2: Refinery Automation -->
			<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-8 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300">
				<div class="flex items-center mb-6">
					<div class="w-16 h-16 bg-red-600 rounded-lg flex items-center justify-center mr-4">
						<i class="fas fa-industry text-white text-2xl"></i>
					</div>
					<div>
						<h3 class="text-xl font-bold text-white">Refinery Process Control</h3>
						<p class="text-gray-400 text-sm">Onshore Refinery Complex</p>
					</div>
				</div>
				<div class="space-y-4">
					<div class="bg-gray-800/50 rounded-lg p-4">
						<h4 class="font-semibold text-blue-300 mb-2">Challenge</h4>
						<p class="text-gray-300 text-sm">A major refinery needed to modernize its control systems for crude distillation units, catalytic cracking, and hydrotreating processes while maintaining continuous operation and meeting strict environmental regulations.</p>
					</div>
					<div class="bg-gray-800/50 rounded-lg p-4">
						<h4 class="font-semibold text-green-300 mb-2">Solution</h4>
						<p class="text-gray-300 text-sm">Implemented distributed control system (DCS) with redundant controllers, advanced process control (APC) algorithms, and integrated safety instrumented systems (SIS) with SIL 3 certification for critical safety functions.</p>
					</div>
					<div class="bg-gray-800/50 rounded-lg p-4">
						<h4 class="font-semibold text-yellow-300 mb-2">Results</h4>
						<p class="text-gray-300 text-sm">Improved process efficiency by 12%, reduced energy consumption by 8%, and achieved zero safety incidents. The system now processes 200,000 barrels per day with enhanced product quality control.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Case Study 3: Gas Processing Plant -->
		<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-8 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300">
			<div class="flex items-center mb-6">
				<div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mr-4">
					<i class="fas fa-fire text-white text-2xl"></i>
				</div>
				<div>
					<h3 class="text-xl font-bold text-white">Natural Gas Processing Plant</h3>
					<p class="text-gray-400 text-sm">Midstream Gas Treatment Facility</p>
				</div>
			</div>
			<div class="grid md:grid-cols-3 gap-6">
				<div class="bg-gray-800/50 rounded-lg p-4">
					<h4 class="font-semibold text-blue-300 mb-2">Challenge</h4>
					<p class="text-gray-300 text-sm">A gas processing plant required automated control systems for gas sweetening, dehydration, and compression units with remote monitoring capabilities for unmanned operation.</p>
				</div>
				<div class="bg-gray-800/50 rounded-lg p-4">
					<h4 class="font-semibold text-green-300 mb-2">Solution</h4>
					<p class="text-gray-300 text-sm">Deployed PLC-based control systems with HMI interfaces, wireless communication for remote monitoring, and integrated fire & gas detection systems with automatic emergency shutdown capabilities.</p>
				</div>
				<div class="bg-gray-800/50 rounded-lg p-4">
					<h4 class="font-semibold text-yellow-300 mb-2">Results</h4>
					<p class="text-gray-300 text-sm">Enabled 24/7 unmanned operation, reduced operational costs by 40%, and improved gas quality consistency. The plant now processes 100 MMSCFD with 99.5% availability.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Control Systems & Technologies -->
<section class="py-20 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="floating-orb orb1"></div>
	<div class="floating-orb orb2"></div>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">CONTROL SYSTEMS & TECHNOLOGIES</h2>
			<div class="w-20 h-1 bg-blue-500 mx-auto mb-4"></div>
			<p class="text-gray-300 max-w-3xl mx-auto">Advanced control panel systems specifically designed for oil & gas applications, featuring the latest technologies and industry-leading safety standards.</p>
		</div>

		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
			<!-- SCADA Systems -->
			<div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300">
				<div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
					<i class="fas fa-desktop text-white text-2xl"></i>
				</div>
				<h3 class="text-xl font-bold text-white mb-3">SCADA Systems</h3>
				<p class="text-gray-300 text-sm mb-4" style="text-align: justify; text-justify: inter-word;">Supervisory Control and Data Acquisition systems for real-time monitoring and control of oil & gas operations with advanced HMI interfaces and historical data logging.</p>
				<ul class="space-y-2 text-sm text-gray-400">
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Real-time process monitoring
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Alarm management & trending
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Remote access capabilities
					</li>
				</ul>
			</div>

			<!-- Safety Instrumented Systems -->
			<div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 hover:bg-white/10 hover:border-red-400/40 transition-all duration-300">
				<div class="w-16 h-16 bg-red-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
					<i class="fas fa-shield-alt text-white text-2xl"></i>
				</div>
				<h3 class="text-xl font-bold text-white mb-3">Safety Instrumented Systems (SIS)</h3>
				<p class="text-gray-300 text-sm mb-4" style="text-align: justify; text-justify: inter-word;">SIL 3 certified safety systems designed to prevent hazardous events and mitigate consequences in oil & gas operations with redundant architectures.</p>
				<ul class="space-y-2 text-sm text-gray-400">
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						SIL 3 certification compliance
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Emergency shutdown systems
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Fire & gas detection
					</li>
				</ul>
			</div>

			<!-- Distributed Control Systems -->
			<div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 hover:bg-white/10 hover:border-green-400/40 transition-all duration-300">
				<div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
					<i class="fas fa-network-wired text-white text-2xl"></i>
				</div>
				<h3 class="text-xl font-bold text-white mb-3">Distributed Control Systems (DCS)</h3>
				<p class="text-gray-300 text-sm mb-4" style="text-align: justify; text-justify: inter-word;">Advanced process control systems for complex oil & gas operations with redundant controllers and integrated asset management capabilities.</p>
				<ul class="space-y-2 text-sm text-gray-400">
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Redundant controller architecture
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Advanced process control
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Asset optimization
					</li>
				</ul>
			</div>

			<!-- Fire & Gas Detection -->
			<div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 hover:bg-white/10 hover:border-orange-400/40 transition-all duration-300">
				<div class="w-16 h-16 bg-orange-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
					<i class="fas fa-fire text-white text-2xl"></i>
				</div>
				<h3 class="text-xl font-bold text-white mb-3">Fire & Gas Detection</h3>
				<p class="text-gray-300 text-sm mb-4" style="text-align: justify; text-justify: inter-word;">Comprehensive fire and gas detection systems with automatic suppression and emergency response capabilities for hazardous area protection.</p>
				<ul class="space-y-2 text-sm text-gray-400">
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Multi-gas detection sensors
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Automatic suppression systems
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Emergency response protocols
					</li>
				</ul>
			</div>

			<!-- Motor Control Centers -->
			<div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 hover:bg-white/10 hover:border-purple-400/40 transition-all duration-300">
				<div class="w-16 h-16 bg-purple-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
					<i class="fas fa-cogs text-white text-2xl"></i>
				</div>
				<h3 class="text-xl font-bold text-white mb-3">Motor Control Centers (MCC)</h3>
				<p class="text-gray-300 text-sm mb-4" style="text-align: justify; text-justify: inter-word;">Robust motor control solutions for pumps, compressors, and other critical equipment in oil & gas facilities with intelligent protection and monitoring.</p>
				<ul class="space-y-2 text-sm text-gray-400">
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Intelligent motor protection
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Soft start capabilities
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Energy monitoring
					</li>
				</ul>
			</div>

			<!-- Power Distribution -->
			<div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 hover:bg-white/10 hover:border-yellow-400/40 transition-all duration-300">
				<div class="w-16 h-16 bg-yellow-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
					<i class="fas fa-bolt text-white text-2xl"></i>
				</div>
				<h3 class="text-xl font-bold text-white mb-3">Power Distribution</h3>
				<p class="text-gray-300 text-sm mb-4" style="text-align: justify; text-justify: inter-word;">Reliable electrical distribution systems with backup power solutions and load management for continuous operation in critical oil & gas applications.</p>
				<ul class="space-y-2 text-sm text-gray-400">
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Redundant power supplies
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						UPS backup systems
					</li>
					<li class="flex items-center">
						<i class="fas fa-check text-green-400 mr-2"></i>
						Load monitoring
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Safety & Compliance -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">SAFETY & COMPLIANCE</h2>
			<div class="w-20 h-1 bg-blue-500 mx-auto mb-4"></div>
			<p class="text-gray-300 max-w-3xl mx-auto">Our oil & gas control systems meet the highest international safety standards and regulatory requirements, ensuring operational excellence and environmental protection.</p>
		</div>

		<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
			<!-- ATEX Certification -->
			<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 text-center hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300">
				<div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-certificate text-white text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-2">ATEX Zone 1 & 2</h3>
				<p class="text-gray-300 text-sm">European directive for explosive atmospheres - Zone 1 and Zone 2 certified equipment for hazardous environments.</p>
			</div>

			<!-- IECEx Certification -->
			<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 text-center hover:bg-white/10 hover:border-green-400/40 transition-all duration-300">
				<div class="w-20 h-20 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-globe text-white text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-2">IECEx International</h3>
				<p class="text-gray-300 text-sm">International explosion-proof standard recognized worldwide for equipment used in explosive atmospheres.</p>
			</div>

			<!-- ABS Compliance -->
			<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 text-center hover:bg-white/10 hover:border-red-400/40 transition-all duration-300">
				<div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-anchor text-white text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-2">ABS Compliance</h3>
				<p class="text-gray-300 text-sm">American Bureau of Shipping classification society standards for marine and offshore applications.</p>
			</div>

			<!-- DNV Compliance -->
			<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-6 text-center hover:bg-white/10 hover:border-purple-400/40 transition-all duration-300">
				<div class="w-20 h-20 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-ship text-white text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-2">DNV Compliance</h3>
				<p class="text-gray-300 text-sm">Det Norske Veritas marine and offshore classification society standards for safety and reliability.</p>
			</div>
		</div>

		<!-- Additional Standards -->
		<div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-lg p-8">
			<h3 class="text-2xl font-bold text-white mb-6 text-center">Additional Standards & Certifications</h3>
			<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
				<div class="flex items-center space-x-3">
					<i class="fas fa-check-circle text-green-400"></i>
					<span class="text-gray-300">IEC 61511 - Functional Safety</span>
				</div>
				<div class="flex items-center space-x-3">
					<i class="fas fa-check-circle text-green-400"></i>
					<span class="text-gray-300">API 14C - Offshore Safety</span>
				</div>
				<div class="flex items-center space-x-3">
					<i class="fas fa-check-circle text-green-400"></i>
					<span class="text-gray-300">NFPA 70 - Electrical Code</span>
				</div>
				<div class="flex items-center space-x-3">
					<i class="fas fa-check-circle text-green-400"></i>
					<span class="text-gray-300">ISO 9001 - Quality Management</span>
				</div>
				<div class="flex items-center space-x-3">
					<i class="fas fa-check-circle text-green-400"></i>
					<span class="text-gray-300">ISO 14001 - Environmental</span>
				</div>
				<div class="flex items-center space-x-3">
					<i class="fas fa-check-circle text-green-400"></i>
					<span class="text-gray-300">OHSAS 18001 - Safety</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Call to Action -->
<section class="py-20 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">READY TO ENHANCE YOUR <span class="text-blue-300">OIL & GAS OPERATIONS?</span></h2>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-8"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto mb-12" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Partner with EPBOX Engineering for cutting-edge control panel solutions that ensure safety, compliance, and operational excellence in your oil & gas facilities.</p>
		<div class="flex flex-col sm:flex-row gap-6 justify-center">
			<a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
				Get Oil & Gas Solution Quote
			</a>
			<a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">
				View Oil & Gas Projects
			</a>
		</div>
	</div>
</section>

<!-- Chat Components -->
<div class="chat-box" onclick="toggleChat()">
	<i class="fas fa-comments"></i>
</div>
<div class="chat-popup" id="chatPopup">
	<div class="chat-header">
		<h3><i class="fas fa-headset mr-2"></i>Chat with EPBox Engineering</h3>
		<button class="close-chat" onclick="toggleChat()"><i class="fas fa-times"></i></button>
	</div>
	<div class="chat-body">
		<p class="text-gray-300 text-sm mb-4">How can we help you with your oil & gas automation needs?</p>
		<input type="text" class="chat-input" placeholder="Type your message here..." id="chatMessage">
		<div class="chat-actions">
			<button class="chat-btn primary" onclick="sendMessage()"><i class="fas fa-paper-plane mr-2"></i>Send</button>
			<button class="chat-btn secondary" onclick="scrollToContact()"><i class="fas fa-phone mr-2"></i>Call Us</button>
		</div>
	</div>
</div>

@endsection
