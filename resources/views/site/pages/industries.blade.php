@extends('site.layouts.app')
@section('title','Industries Served | Epbox Engineering | Industrial Automation Solutions')
@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h1 class="text-4xl md:text-6xl font-bold mb-6">Industries <span class="text-blue-300">We Serve</span></h1>
		<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
		<p class="text-xl text-gray-300 max-w-3xl mx-auto">Epbox Engineering delivers cutting-edge control panel solutions across diverse industrial sectors, ensuring operational excellence and safety compliance for businesses worldwide.</p>
	</div>
</section>

<!-- Industry Stats -->
<section class="py-16 px-6 bg-[#0A1128] fade-section">
	<div class="max-w-7xl mx-auto">
		<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
			<div class="text-center">
				<div class="stats-counter" data-target="15">0</div>
				<p class="text-gray-300 font-medium">Industries Served</p>
			</div>
			<div class="text-center">
				<div class="stats-counter" data-target="40">0</div>
				<p class="text-gray-300 font-medium">Countries Reached</p>
			</div>
			<div class="text-center">
				<div class="stats-counter" data-target="500">0</div>
				<p class="text-gray-300 font-medium">Projects Completed</p>
			</div>
			<div class="text-center">
				<div class="stats-counter" data-target="98">0</div>
				<p class="text-gray-300 font-medium">Client Satisfaction %</p>
			</div>
		</div>
	</div>
</section>

<!-- Key Industries Grid -->
<section id="key-industries" class="py-20 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
	<div class="floating-orb orb1"></div>
	<div class="floating-orb orb2"></div>
	<div class="floating-orb orb3"></div>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300">Key Industries</h2>
			<div class="w-20 h-1 bg-blue-500 mx-auto"></div>
		</div>
		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
			<!-- Manufacturing -->
			<div class="industry-card p-8 rounded-lg text-left">
				<img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80" alt="Manufacturing Control Panel" class="w-full h-48 object-cover rounded-lg mb-6 shadow-lg">
				<div class="industry-icon text-blue-400 text-5xl mb-6"><i class="fas fa-industry"></i></div>
				<h3 class="text-xl font-semibold mb-4">Manufacturing</h3>
				<p class="text-gray-300 mb-4">Automated production lines, quality control systems, and process optimization solutions for manufacturing facilities.</p>
				<ul class="text-sm text-gray-400 space-y-1">
					<li>• Production Line Automation</li>
					<li>• Quality Control Systems</li>
					<li>• Process Monitoring</li>
					<li>• Safety Compliance</li>
				</ul>
			</div>
			<!-- Oil & Gas -->
			<div id="oil-gas" class="industry-card p-8 rounded-lg text-left">
				<img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&q=80" alt="Oil & Gas Control Panel" class="w-full h-48 object-cover rounded-lg mb-6 shadow-lg">
				<div class="industry-icon text-blue-400 text-5xl mb-6"><i class="fas fa-oil-can"></i></div>
				<h3 class="text-xl font-semibold mb-4">Oil & Gas</h3>
				<p class="text-gray-300 mb-4">ATEX certified control systems for upstream, midstream, and downstream operations with SIL-rated safety systems.</p>
				<ul class="text-sm text-gray-400 space-y-1">
					<li>• Wellhead Control & BOP Systems</li>
					<li>• Pipeline SCADA & Leak Detection</li>
					<li>• Refinery Process Automation</li>
					<li>• Offshore Platform Control</li>
					<li>• Gas Processing & Compression</li>
					<li>• Emergency Shutdown (ESD) Systems</li>
				</ul>
				<div class="mt-4 pt-4 border-t border-gray-700">
					<div class="flex items-center gap-2 text-xs text-blue-400">
						<i class="fas fa-shield-alt"></i>
						<span>ATEX Certified • SIL Rated • API Compliant</span>
					</div>
				</div>
			</div>
			<!-- Power Generation -->
			<div id="power-clean-energy" class="industry-card p-8 rounded-lg text-left">
				<img src="{{ asset('img/img_asset/power2.jpg') }}" alt="Power Generation Control Panel" class="w-full h-48 object-cover rounded-lg mb-6 shadow-lg">
				<div class="industry-icon text-blue-400 text-5xl mb-6"><i class="fas fa-bolt"></i></div>
				<h3 class="text-xl font-semibold mb-4">Power Generation</h3>
				<p class="text-gray-300 mb-4">Control systems for thermal, hydro, and renewable energy plants ensuring reliable power generation.</p>
				<ul class="text-sm text-gray-400 space-y-1">
					<li>• Turbine Control Systems</li>
					<li>• Grid Management</li>
					<li>• Load Balancing</li>
					<li>• Emergency Systems</li>
				</ul>
			</div>
			<!-- Water & Wastewater -->
			<div id="water-building" class="industry-card p-8 rounded-lg text-left">
				<img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=800&q=80" alt="Water & Wastewater Control Panel" class="w-full h-48 object-cover rounded-lg mb-6 shadow-lg">
				<div class="industry-icon text-blue-400 text-5xl mb-6"><i class="fas fa-water"></i></div>
				<h3 class="text-xl font-semibold mb-4">Water & Wastewater</h3>
				<p class="text-gray-300 mb-4">Treatment plant automation, pump station control, and water quality monitoring systems.</p>
				<ul class="text-sm text-gray-400 space-y-1">
					<li>• Treatment Plant Control</li>
					<li>• Pump Station Automation</li>
					<li>• Quality Monitoring</li>
					<li>• Flow Control Systems</li>
				</ul>
			</div>
			<!-- Building Automation -->
			<div class="industry-card p-8 rounded-lg text-left">
				<img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Building Automation Control Panel" class="w-full h-48 object-cover rounded-lg mb-6 shadow-lg">
				<div class="industry-icon text-blue-400 text-5xl mb-6"><i class="fas fa-building"></i></div>
				<h3 class="text-xl font-semibold mb-4">Building Automation</h3>
				<p class="text-gray-300 mb-4">Smart building control systems for HVAC, lighting, security, and energy management optimization.</p>
				<ul class="text-sm text-gray-400 space-y-1">
					<li>• HVAC Control Systems</li>
					<li>• Lighting Automation</li>
					<li>• Security Integration</li>
					<li>• Energy Management</li>
				</ul>
			</div>
			<!-- Process Control / Data Centres & Industrial Automation -->
			<div id="data-centres" class="industry-card p-8 rounded-lg text-left">
				<img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&q=80" alt="Process Control Panel" class="w-full h-48 object-cover rounded-lg mb-6 shadow-lg">
				<div class="industry-icon text-blue-400 text-5xl mb-6"><i class="fas fa-cogs"></i></div>
				<h3 class="text-xl font-semibold mb-4">Process Control</h3>
				<p class="text-gray-300 mb-4">Advanced process control systems for industrial automation and manufacturing optimization.</p>
				<ul class="text-sm text-gray-400 space-y-1">
					<li>• SCADA Systems</li>
					<li>• PLC Programming</li>
					<li>• Data Acquisition</li>
					<li>• Real-time Monitoring</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Industry-Specific Solutions Detail -->
<section class="py-20 px-6 gradient-bg fade-section">
	<div class="max-w-7xl mx-auto">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6">Industry-Specific Solutions</h2>
			<div class="w-32 h-1 bg-white mx-auto mb-6"></div>
		</div>
		<div class="grid lg:grid-cols-2 gap-12">
			<div>
				<h3 class="text-2xl font-bold mb-6 text-blue-300">Customized Control Systems</h3>
				<p class="text-gray-300 mb-6 text-lg">Each industry has unique requirements and challenges. Our team specializes in developing customized control panel solutions that address specific operational needs, safety requirements, and regulatory compliance standards.</p>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Industry-specific safety protocols and emergency systems</span></li>
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Compliance with international standards (ISO, IEC, UL, CE)</span></li>
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Integration with existing plant infrastructure</span></li>
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>24/7 technical support and maintenance services</span></li>
				</ul>
			</div>
			<div>
				<h3 class="text-2xl font-bold mb-6 text-blue-300">Technology Integration</h3>
				<p class="text-gray-300 mb-6 text-lg">We leverage cutting-edge technologies including IoT, Industry 4.0, and smart manufacturing principles to deliver future-ready control solutions that enhance operational efficiency.</p>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>IoT-enabled monitoring and predictive maintenance</span></li>
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Cloud-based data analytics and reporting</span></li>
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Mobile and remote access capabilities</span></li>
					<li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Scalable architecture for future expansion</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Oil & Gas Industry Expertise -->
<section class="py-20 px-6 bg-[#0A1128] fade-section">
	<div class="max-w-7xl mx-auto">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300">Oil & Gas Industry Expertise</h2>
			<div class="w-32 h-1 bg-blue-500 mx-auto mb-6"></div>
			<p class="text-xl text-gray-300 max-w-3xl mx-auto">Specialized control systems designed for the unique challenges and safety requirements of the oil and gas industry</p>
		</div>
		<div class="grid lg:grid-cols-2 gap-12">
			<!-- Upstream Operations -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-drill text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Upstream Operations</h3>
						<p class="text-blue-400">Exploration & Production</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Wellhead Control Systems & BOP Automation</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Drilling Rig Control & Monitoring</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Production Well Control & Optimization</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Offshore Platform Control Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>ATEX Certified Explosion-Proof Equipment</span></li>
				</ul>
			</div>
			<!-- Midstream Operations -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-pipe text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Midstream Operations</h3>
						<p class="text-blue-400">Transportation & Storage</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Pipeline SCADA & Leak Detection Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Compressor Station Automation</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Tank Farm Management & Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Gas Processing Plant Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Real-time Monitoring & Control</span></li>
				</ul>
			</div>
			<!-- Downstream Operations -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-industry text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Downstream Operations</h3>
						<p class="text-blue-400">Refining & Distribution</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Refinery Process Control & Automation</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Distillation Column Control Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Product Blending & Quality Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Terminal & Distribution Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Advanced Process Optimization</span></li>
				</ul>
			</div>
			<!-- Safety & Compliance -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-shield-alt text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Safety & Compliance</h3>
						<p class="text-blue-400">Certified & Regulated</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>SIL Rated Safety Instrumented Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Emergency Shutdown (ESD) Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Fire & Gas Detection Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>API Standards Compliance</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>IEC Functional Safety Standards</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- CTA Section (moved near footer) -->

<!-- Oil & Gas Success Stories -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<div class="max-w-7xl mx-auto">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300">Oil & Gas Success Stories</h2>
			<div class="w-32 h-1 bg-blue-500 mx-auto mb-6"></div>
			<p class="text-xl text-gray-300 max-w-3xl mx-auto">Real-world projects demonstrating our expertise in critical oil and gas control systems</p>
		</div>

		<div class="grid lg:grid-cols-2 gap-8">
			<!-- Case Study 1 -->
			<div class="bg-gray-800/50 p-8 rounded-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center">
						<i class="fas fa-oil-rig text-blue-400 text-2xl"></i>
					</div>
					<div>
						<h3 class="text-xl font-bold text-white">Offshore Platform Control System</h3>
						<p class="text-blue-400">North Sea Platform</p>
					</div>
				</div>
				<p class="text-gray-300 mb-4">Complete automation of offshore platform control systems including well control, safety shutdown, and remote monitoring capabilities.</p>
				<div class="flex flex-wrap gap-2">
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">ATEX Certified</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">SIL 3 Rated</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">24/7 Monitoring</span>
				</div>
			</div>

			<!-- Case Study 2 -->
			<div class="bg-gray-800/50 p-8 rounded-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center">
						<i class="fas fa-pipe text-blue-400 text-2xl"></i>
					</div>
					<div>
						<h3 class="text-xl font-bold text-white">Pipeline SCADA System</h3>
						<p class="text-blue-400">Transcontinental Pipeline</p>
					</div>
				</div>
				<p class="text-gray-300 mb-4">Advanced SCADA system for 2,000km pipeline with real-time leak detection, pressure monitoring, and automated valve control.</p>
				<div class="flex flex-wrap gap-2">
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Leak Detection</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Real-time Monitoring</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Automated Control</span>
				</div>
			</div>

			<!-- Case Study 3 -->
			<div class="bg-gray-800/50 p-8 rounded-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center">
						<i class="fas fa-industry text-blue-400 text-2xl"></i>
					</div>
					<div>
						<h3 class="text-xl font-bold text-white">Refinery Process Control</h3>
						<p class="text-blue-400">Major Refinery Complex</p>
					</div>
				</div>
				<p class="text-gray-300 mb-4">Complete refinery automation including distillation control, safety systems, and process optimization for increased efficiency.</p>
				<div class="flex flex-wrap gap-2">
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Process Control</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Safety Systems</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Efficiency Optimization</span>
				</div>
			</div>

			<!-- Case Study 4 -->
			<div class="bg-gray-800/50 p-8 rounded-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center">
						<i class="fas fa-gas-pump text-blue-400 text-2xl"></i>
					</div>
					<div>
						<h3 class="text-xl font-bold text-white">Gas Processing Plant</h3>
						<p class="text-blue-400">Natural Gas Facility</p>
					</div>
				</div>
				<p class="text-gray-300 mb-4">Automated gas processing control system with compression control, separation processes, and quality monitoring systems.</p>
				<div class="flex flex-wrap gap-2">
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Compression Control</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Quality Monitoring</span>
					<span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Process Automation</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Oil & Gas Specific Services Section -->
<section class="py-20 px-6 bg-[#0A1128] fade-section">
	<div class="max-w-7xl mx-auto">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300"><i class="fas fa-industry mr-3 text-blue-400"></i>Oil & Gas Industry Solutions</h2>
			<div class="w-32 h-1 bg-blue-500 mx-auto mb-6"></div>
			<p class="text-xl text-gray-300 max-w-3xl mx-auto">Specialized control systems and automation solutions designed specifically for the unique challenges of the oil and gas industry</p>
		</div>
		<div class="grid lg:grid-cols-2 gap-12">
			<!-- Upstream Services -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-oil-well text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Upstream Operations</h3>
						<p class="text-blue-400">Exploration & Production</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Wellhead Control Systems & BOP Automation</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Drilling Rig Control & Monitoring</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Production Well Control & Optimization</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Offshore Platform Control Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>ATEX Certified Explosion-Proof Equipment</span></li>
				</ul>
			</div>
			<!-- Midstream Services -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-pipe text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Midstream Operations</h3>
						<p class="text-blue-400">Transportation & Storage</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Pipeline SCADA & Leak Detection Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Compressor Station Automation</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Tank Farm Management & Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Gas Processing Plant Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Real-time Monitoring & Control</span></li>
				</ul>
			</div>
			<!-- Downstream Services -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-industry text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Downstream Operations</h3>
						<p class="text-blue-400">Refining & Distribution</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Refinery Process Control & Automation</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Distillation Column Control Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Product Blending & Quality Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Terminal & Distribution Control</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Advanced Process Optimization</span></li>
				</ul>
			</div>
			<!-- Safety & Compliance Services -->
			<div class="bg-gray-900/40 p-8 rounded-lg border border-blue-900/40">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-16 h-16 bg-blue-500/20 rounded-lg flex items-center justify-center"><i class="fas fa-shield-alt text-blue-400 text-2xl"></i></div>
					<div>
						<h3 class="text-2xl font-bold text-white">Safety & Compliance</h3>
						<p class="text-blue-400">Certified & Regulated</p>
					</div>
				</div>
				<ul class="space-y-3 text-gray-300">
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>SIL Rated Safety Instrumented Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Emergency Shutdown (ESD) Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>Fire & Gas Detection Systems</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>API Standards Compliance</span></li>
					<li class="flex items-start"><i class="fas fa-check text-blue-400 mt-1 mr-3"></i><span>IEC Functional Safety Standards</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Industry Standards & Compliance -->
<section class="py-20 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
	<div class="max-w-7xl mx-auto">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300">Industry Standards & Compliance</h2>
			<div class="w-32 h-1 bg-blue-500 mx-auto mb-6"></div>
			<p class="text-xl text-gray-300 max-w-3xl mx-auto">Our control systems meet the highest international standards for safety and reliability in the oil and gas industry</p>
		</div>
		<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
			<div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700 text-center hover:border-blue-500 transition-all duration-300">
				<div class="w-20 h-20 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-shield-alt text-blue-400 text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-3">ATEX Certified</h3>
				<p class="text-gray-300 text-sm">Explosion-proof equipment certified for hazardous environments in oil and gas facilities</p>
			</div>
			<div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700 text-center hover:border-blue-500 transition-all duration-300">
				<div class="w-20 h-20 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-exclamation-triangle text-blue-400 text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-3">SIL Rated Systems</h3>
				<p class="text-gray-300 text-sm">Safety Integrity Level rated systems ensuring reliable safety functions in critical operations</p>
			</div>
			<div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700 text-center hover:border-blue-500 transition-all duration-300">
				<div class="w-20 h-20 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-certificate text-blue-400 text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-3">API Compliance</h3>
				<p class="text-gray-300 text-sm">American Petroleum Institute standards compliance for equipment and systems in oil and gas operations</p>
			</div>
			<div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700 text-center hover:border-blue-500 transition-all duration-300">
				<div class="w-20 h-20 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-4">
					<i class="fas fa-globe text-blue-400 text-3xl"></i>
				</div>
				<h3 class="text-lg font-bold text-white mb-3">IEC Standards</h3>
				<p class="text-gray-300 text-sm">International Electrotechnical Commission standards for electrical equipment and systems</p>
			</div>
		</div>
		<div class="mt-12 grid md:grid-cols-2 gap-8">
			<div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700">
				<h3 class="text-xl font-bold text-white mb-4">Safety Standards</h3>
				<ul class="space-y-2 text-gray-300">
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>ISO 13849 - Safety of machinery</span></li>
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>IEC 61508 - Functional safety</span></li>
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>IEC 61511 - Process industry safety</span></li>
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>NFPA 70 - National Electrical Code</span></li>
				</ul>
			</div>
			<div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700">
				<h3 class="text-xl font-bold text-white mb-4">Quality Assurance</h3>
				<ul class="space-y-2 text-gray-300">
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>ISO 9001 - Quality management</span></li>
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>ISO 14001 - Environmental management</span></li>
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>OHSAS 18001 - Occupational health & safety</span></li>
					<li class="flex items-center gap-2"><i class="fas fa-check text-blue-400"></i><span>Third-party testing & certification</span></li>
				</ul>
			</div>
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
<!-- CTA Section (bottom) -->
<section class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Industry?</h2>
		<p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Partner with us for compliant, reliable, and scalable control solutions tailored to your operations.</p>
		<div class="flex flex-col sm:flex-row gap-4 justify-center">
			<a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Get Free Consultation</a>
			<a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">View Our Projects</a>
		</div>
	</div>
</section>
@endsection