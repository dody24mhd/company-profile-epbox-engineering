@extends('site.layouts.app')
@section('title','About Us | Epbox Engineering')
@section('content')
<!-- About Hero Section -->
<section class="about-hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 relative fade-section">
	<div class="interactive-bg">
		<div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
		<div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
		<div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
	</div>

	<!-- Particles Canvas Layer for About Hero -->
	<canvas id="aboutParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">
		Your browser doesn't support Canvas.
	</canvas>

	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h1 class="text-4xl md:text-6xl font-bold mb-6 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">
				<span class="text-white-300">EPBOX ENGINEERING PRIVATE LIMITED</span>
			</h1>
			<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
			<p class="text-xl text-white-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
				we provide end to end solutions in industrial control, integrating advanced hardware design with intelligent programming and robust system architecture.
			</p>
		</div>

		<!-- Quick Stats -->
		<div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="8">0</div>
				<p class="text-gray-300 font-medium">Years Experience</p>
			</div>
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="30+">0</div>
				<p class="text-gray-300 font-medium">Projects Delivered</p>
			</div>
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="10+">0</div>
				<p class="text-gray-300 font-medium">Number of Clients</p>
			</div>
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="123">0</div>
				<p class="text-gray-300 font-medium">Views</p>
			</div>
		</div>
	</div>
</section>
<!-- Our Story Modal -->
<div id="ourStoryModal" class="fixed inset-0 z-50 hidden items-center justify-center">
    <div id="ourStoryBackdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
    <div class="relative z-10 w-full max-w-3xl px-4">
        <div id="ourStoryPanel" class="bg-gray-900/90 
		backdrop-blur-lg rounded-lg p-6 md:p-8 border border-gray-700/70 shadow-2xl transform-gpu transition-all duration-300 opacity-0 translate-y-4 scale-95">
            <div class="flex items-start justify-between mb-4">
                <h3 class="text-2xl font-semibold text-white">ABOUT US</h3>
                <button aria-label="Close" class="text-gray-400 hover:text-white transition" onclick="closeOurStoryModal()">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div class="text-gray-300 space-y-4 text-justify">
                <p>EPBOX ENGINEERING is a trusted name in industrial automation, control systems, and intelligent panel solutions. Founded on 14 March 2017 in Singapore, the company was established with a clear vision:</p>
                <p class="italic">“To be the one stop solution for industrial control and automation, delivering integrated services from panel design to system commissioning, and empowering global transformation.”</p>
                <p>From our early years, we have focused on providing tailored control panels, power distribution systems, and automation solutions that meet international safety and compliance standards. Our approach has always been guided by a deep understanding of the challenges faced in mission-critical and hazardous environments, where performance and safety are essential.</p>
                <p>In 2024, we expanded operations to Batam, Indonesia, strengthening our presence in Southeast Asia. This expansion allows us to combine localized engineering expertise and faster delivery with global compliance frameworks such as IEC, NEMA, ATEX, IECEx, NFPA, ABS, DNV, and CP5.</p>
                <p>Today, EPBOX ENGINEERING provides end-to-end services from conceptual design, CAD drafting, and panel fabrication to PLC, HMI, and SCADA programming, FAT/SAT, and commissioning. More than a manufacturer, we see ourselves as a solutions partner, working closely with clients to develop safe, efficient, and future-ready systems. Our solutions are applied across oil & gas, marine & offshore, power generation, data centres, clean energy, and critical infrastructure, consistently supporting industries with reliable and sustainable operations. With every project, we are committed to combining engineering excellence, compliance, and innovation to deliver results that build long-term trust.</p>
            </div>
        </div>
    </div>
    <div class="sr-only" aria-live="polite"></div>
    <script>
        function openOurStoryModal(e){ e && e.preventDefault && e.preventDefault(); const m=document.getElementById('ourStoryModal'); const b=document.getElementById('ourStoryBackdrop'); const p=document.getElementById('ourStoryPanel'); if(!m||!b||!p) return; m.classList.remove('hidden'); m.classList.add('flex'); requestAnimationFrame(()=>{ b.classList.remove('opacity-0'); b.classList.add('opacity-100'); p.classList.remove('opacity-0','translate-y-4','scale-95'); p.classList.add('opacity-100','translate-y-0','scale-100'); }); }
        function closeOurStoryModal(){ const m=document.getElementById('ourStoryModal'); const b=document.getElementById('ourStoryBackdrop'); const p=document.getElementById('ourStoryPanel'); if(!m||!b||!p) return; b.classList.remove('opacity-100'); b.classList.add('opacity-0'); p.classList.remove('opacity-100','translate-y-0','scale-100'); p.classList.add('opacity-0','translate-y-4','scale-95'); setTimeout(()=>{ m.classList.add('hidden'); m.classList.remove('flex'); },300); }
        document.addEventListener('keydown',function(ev){ if(ev.key==='Escape'){ closeOurStoryModal(); }});
        document.getElementById('ourStoryBackdrop')?.addEventListener('click', closeOurStoryModal);
    </script>
</div>

<!-- Company Story Section -->
<section id="our-story" class="pt-20 pb-24 md:pb-28 lg:pb-32 px-8 md:px-12 lg:px-16 mb-0 relative overflow-hidden fade-section">
    <!-- Canvas Background (match Home style) -->
    <canvas id="story-canvas" class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <!-- Interactive Background Elements -->
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
		<div class="grid lg:grid-cols-2 gap-12 items-start">
			<div class="pb-16 md:pb-20 lg:pb-24">
				<h2 class="text-3xl md:text-4xl font-bold mb-3 text-white section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">ABOUT US</h2>
				<div class="w-32 h-1 bg-blue-500 mb-4"></div>
				<p class="text-gray-300 mb-6 text-lg leading-relaxed" style="text-align: justify !important; text-justify: inter-word; font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">EPBOX ENGINEERING is a trusted name in industrial automation, control systems, and 
					intelligent panel solutions. Founded on 14 March 2017 in Singapore, the company was 
					established with a clear vision: 
					"To be the one stop solution for industrial control and automation, delivering integrated 
					services from panel design to system commissioning, and empowering global 
					transformation." </p>
				<p class="text-gray-300 mb-4 text-lg leading-relaxed" style="text-align: justify !important; text-justify: inter-word; font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">From our early years, we have focused on providing tailored control panels, power 
					distribution systems, and automation solutions that meet international safety and compliance 
					standards. Our approach has always been guided by a deep understanding of the challenges 
					faced in mission-critical and hazardous environments, where performance and safety are 
					essential.</p>
				<a href="#" onclick="openOurStoryModal(event)" class="inline-block text-blue-400 hover:text-blue-300 font-semibold mb-6">Read more →</a>
				<div class="flex flex-col sm:flex-row gap-4 mb-10 md:mb-14 lg:mb-16">
					<a href="#mission" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">Vision & Mission</a>
				<a href="#commitment" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">Our Commitment</a>
				</div>
			</div>
			<div class="about-image-gallery relative self-start mt-12 md:mt-14">
				<div class="absolute -top-8 left-1/2 -translate-x-1/2 w-96 h-96 md:w-[420px] md:h-[420px] bg-[radial-gradient(circle,rgba(59,130,246,0.35)_0%,rgba(59,130,246,0.12)_60%,transparent_100%)] blur-2xl z-0"></div>
				<img src="{{ asset('img/epbox/sunview.jpg') }}" alt="Sunview Control Panel" class="w-full h-96 object-cover rounded-lg shadow-2xl relative z-10">
				<div class="about-image-overlay"></div>
			</div>
		</div>
	</div>
</section>

<!-- ISO Certification Section (with Visi & Misi) -->
<section id="mission" class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="absolute inset-0 opacity-10">
		<div class="absolute top-20 left-10 w-20 h-20 bg-blue-500 rounded-full blur-xl animate-pulse"></div>
		<div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-400 rounded-full blur-xl animate-pulse delay-1000"></div>
	</div>

		<div class="max-w-7xl mx-auto relative z-10">
			<!-- Visi & Misi merged into ISO section -->
			<div class="max-w-7xl mx-auto relative z-10">
				<div class="grid md:grid-cols-2 gap-6">
					<!-- Vision (Left) -->
					<div class="bg-white/10 backdrop-blur-sm border border-white/20 p-6 rounded-none">
						<h3 class="text-2xl font-semibold mb-3 text-white section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Our Vision</h3>
						<div class="w-20 h-1 bg-blue-500 mb-4"></div>
						<p class="text-gray-200 leading-relaxed" style="text-align: justify !important; text-justify: inter-word; font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
							To be the one stop solution for industrial control and automation, delivering integrated services from panel design to system commissioning, empowering global transformation.
						</p>
					</div>
					<!-- Mission (Right) -->
					<div class="bg-white/10 backdrop-blur-sm border border-white/20 p-6 rounded-none">
						<h3 class="text-2xl font-semibold mb-3 text-white section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Our Mission</h3>
						<div class="w-20 h-1 bg-blue-500 mb-4"></div>
						<p class="text-gray-200 leading-relaxed" style="text-align: justify !important; text-justify: inter-word; font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
							To revolutionize industries worldwide with cutting‑edge panel solutions, driving progress, growth, and connectivity toward a sustainable future.
						</p>
					</div>
				</div>
			</div>
		<div class="grid lg:grid-cols-2 gap-12 items-center mt-12">
				<div class="order-2 lg:order-1 self-start">
				<div class="relative group">
					<div class="image-gallery-container zoom-container">
						<img src="{{ asset('img/aboutus/iso2015.jpg') }}" alt="ISO 9001:2015 Certificate" loading="lazy"
							class="main-image zoom-image rounded-lg shadow-2xl w-full h-96 object-cover cursor-pointer slide-in">
					</div>
				</div>
			</div>

				<div class="order-1 lg:order-2 flex flex-col self-start">
			<h3 class="text-2xl md:text-3xl font-bold mb-4 text-white leading-snug md:leading-tight tracking-wide section-title text-left" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">ISO 9001:2015 CERTIFICATION</h3>
					<div class="w-32 h-1 bg-blue-500 mb-6"></div>
				<div class="mission-content">
					<p class="text-gray-300 mb-4 text-lg leading-relaxed text-justify" style="text-align: justify !important; font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
						EPBOX ENGINEERING PTE. LTD is certified to ISO 9001:2015 standards, demonstrating our commitment to quality management and continuous improvement in all our processes and services.
					</p>
					<div class="mb-4">
						<h4 class="text-white text-lg font-semibold mb-3" style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Certification Benefits:</h4>
						<ul class="text-gray-300 text-lg leading-relaxed" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
							<li class="mb-2">• Consistent quality standards</li>
							<li class="mb-2">• Customer satisfaction focus</li>
							<li class="mb-2">• Continuous process improvement</li>
							<li class="mb-2">• International recognition</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	
	</div>
</section>

<!-- Timeline Section -->
<section id="journey" class="py-20 px-6 relative overflow-hidden fade-section">
	<canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/epbox/gambar1.png') }}'); background-size: 120%;"></div>
	<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.7), rgba(15,28,63,0.9));"></div>
	<!-- Decorative Shapes Overlay -->
	<div class="absolute inset-0 opacity-70 pointer-events-none">
		<div class="absolute -top-10 left-8 w-48 h-48 bg-blue-500/30 rounded-full blur-3xl"></div>
		<div class="absolute top-1/3 right-12 w-64 h-64 bg-indigo-500/25 rounded-full blur-3xl"></div>
		<div class="absolute bottom-10 left-1/4 w-56 h-56 bg-blue-400/20 rounded-full blur-3xl"></div>
	</div>

	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-3 text-blue-300 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR JOURNEY</h2>
			<div class="w-32 h-1 bg-blue-500 mx-auto mb-4"></div>
		</div>
		<div class="grid md:grid-cols-2 gap-12">
			<div class="space-y-8">
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">2017 - Foundation</h3>
					<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">The company started by renting a warehouse and tools, Initially, Epbox Engineering provided PLC programming services and panel design.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">2018 - Strategic Projects</h3>
					<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">the company expanded by securing a new warehouse after winning the Google Data Center project, and also invested in new tools and hired three freelancers.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">2020 - Expansion & Major Projects</h3>
					<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Completed the second Data Center and a Fire Fighting System project. Established partnerships with industry leaders and entered the oil & gas sector.</p>
				</div>
			</div>
			<div class="space-y-8">
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">2023 - Expansion into Indonesia</h3>
					<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Purchased a new warehouse and officially opened operations in Indonesia, marking significant growth and expansion in Southeast Asia.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">2024 - ISO Certification</h3>
					<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Achieved ISO 9001:2015 certification establishing our commitment to quality management and continuous improvement.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">2025 - Ongoing Growth</h3>
					<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">EPBOX ENGINEERING Pte. Ltd. continues to innovate and expand its portfolio, solidifying its leadership in the industrial control systems sector.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Why It Matters Section -->
<section id="why-matters" class="py-20 px-6 relative overflow-hidden fade-section">
    <!-- Canvas Background (match Home Company Profile) -->
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

    <div class="max-w-7xl mx-auto relative z-10 text-center">
	  <div class="mb-8">
		<h2 class="text-3xl md:text-4xl font-bold section-title mb-3" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">BUILDING THE FUTURE TOGETHER</h2>
		<div class="w-28 h-1 bg-blue-500 mx-auto"></div>
	  </div>
	  <p class="text-gray-300 max-w-4xl mx-auto text-lg leading-relaxed" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
		EPBOX ENGINEERING Pte. Ltd. is more than just a provider of control systems, we are innovators in intelligent, connected automation solutions. With a strong foundation in various industries, including oil & gas, utilities, and industrial plants, we are dedicated to delivering systems that ensure safety, reliability, and future readiness. Our team is driven by a passion for excellence, constantly evolving to meet the dynamic needs of our clients and the industries we serve. At EPBOX, we don't just create systems; we build lasting partnerships that drive operational success and enhance performance.
	  </p>
      <div class="max-w-4xl mx-auto text-center mt-6">
		<p class="text-2xl md:text-3xl text-white leading-relaxed" style="font-family: 'Helvetica', Arial, sans-serif; font-weight: bold;">"Beyond Boundaries, We Command Control"</p>
	</div>
	</div>
</section>

<!-- Commitment to Quality & Excellence Section -->
<section id="commitment" class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="max-w-7xl mx-auto relative z-10 text-center">
		<!-- Header dengan format yang sama seperti Our Values -->
		<div class="mb-8">
			<h2 class="text-3xl md:text-4xl font-bold mb-3 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">COMMITMENT QUALITY</h2>
			<div class="w-32 h-1 bg-white mx-auto mb-4"></div>
		</div>
		<!-- Quality Pillars -->
		<div class="grid md:grid-cols-3 gap-8 mb-12">
			<div class="quality-pillar">
				<div class="text-white text-4xl mb-4"><i class="fas fa-award"></i></div>
				<h3 class="text-xl font-semibold text-white mb-3" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">International Standards</h3>
				<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Following strict international standards in design and manufacturing</p>
			</div>
			<div class="quality-pillar">
				<div class="text-white text-4xl mb-4"><i class="fas fa-shield-alt"></i></div>
				<h3 class="text-xl font-semibold text-white mb-3" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Maximum Reliability</h3>
				<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Ensuring systems operate with maximum reliability and safety</p>
			</div>
			<div class="quality-pillar">
				<div class="text-white text-4xl mb-4"><i class="fas fa-cogs"></i></div>
				<h3 class="text-xl font-semibold text-white mb-3" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Holistic Approach</h3>
				<p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Quality maintained at every stage from planning to implementation</p>
			</div>
		</div>

		<!-- Call to Action -->
		<div class="flex flex-col sm:flex-row gap-4 justify-center">
			<a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Get Free Quote</a>
			<a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">View Our Projects</a>
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