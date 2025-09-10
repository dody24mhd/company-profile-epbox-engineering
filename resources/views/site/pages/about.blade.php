@extends('site.layouts.app')
@section('title','About Us | Epbox Engineering')
@section('content')
<!-- About Hero Section -->
<section class="about-hero pt-32 pb-20 px-6 relative fade-section">
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
			<h1 class="text-4xl md:text-6xl font-bold mb-6">
				<span class="text-blue-300">EPBOX ENGINEERING</span>
			</h1>
			<div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
			<p class="text-xl text-gray-300 max-w-3xl mx-auto">
				Leading manufacturer of electrical control panels and control panel systems, delivering innovative solutions for industrial automation and control applications worldwide.
			</p>
		</div>

		<!-- Quick Stats -->
		<div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="7">0</div>
				<p class="text-gray-300 font-medium">Years Experience</p>
			</div>
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="150">0</div>
				<p class="text-gray-300 font-medium">Projects Completed</p>
			</div>
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="40">0</div>
				<p class="text-gray-300 font-medium">Countries Served</p>
			</div>
			<div class="about-stats p-6 rounded-lg text-center">
				<div class="about-counter" data-target="100">0</div>
				<p class="text-gray-300 font-medium">Client Satisfaction %</p>
			</div>
		</div>
	</div>
</section>

<!-- Company Story Section -->
<section class="py-20 px-6 bg-gray-900 relative overflow-hidden fade-section">
	<div class="absolute inset-0 opacity-10">
		<div class="absolute top-20 left-10 w-20 h-20 bg-blue-500 rounded-full blur-xl animate-pulse"></div>
		<div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-400 rounded-full blur-xl animate-pulse delay-1000"></div>
	</div>

	<div class="max-w-7xl mx-auto relative z-10">
		<div class="grid lg:grid-cols-2 gap-12 items-center">
			<div>
				<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300">Our Story</h2>
				<p class="text-gray-300 mb-6 text-lg leading-relaxed">Founded in 2017, Epbox Engineering began as a small team of passionate electrical engineers with a vision to revolutionize industrial control systems. What started as a local workshop has grown into a global leader in control panel manufacturing and system integration.</p>
				<p class="text-gray-300 mb-6 text-lg leading-relaxed">Our journey has been marked by continuous innovation, unwavering commitment to quality, and deep understanding of industrial automation needs. Today, we serve clients across 40+ countries, delivering cutting-edge control panel solutions that drive efficiency and safety.</p>
				<div class="flex flex-col sm:flex-row gap-4">
					<a href="#mission" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">Our Mission</a>
					<a href="#team" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">Meet Our Team</a>
				</div>
			</div>

			<div class="about-image-gallery relative">
				<div class="absolute -top-8 left-1/2 -translate-x-1/2 w-96 h-96 md:w-[420px] md:h-[420px] bg-[radial-gradient(circle,rgba(59,130,246,0.35)_0%,rgba(59,130,246,0.12)_60%,transparent_100%)] blur-2xl z-0"></div>
				<img src="{{ asset('img/img_asset/sunview.jpg') }}" alt="Sunview Control Panel" class="w-full h-96 object-cover rounded-lg shadow-2xl relative z-10">
				<div class="about-image-overlay"></div>
			</div>
		</div>
	</div>
</section>

<!-- ISO Certification Section -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<div class="absolute inset-0 opacity-10">
		<div class="absolute top-20 left-10 w-20 h-20 bg-blue-500 rounded-full blur-xl animate-pulse"></div>
		<div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-400 rounded-full blur-xl animate-pulse delay-1000"></div>
	</div>

	<div class="max-w-7xl mx-auto relative z-10">
		<div class="grid lg:grid-cols-2 gap-12 items-center">
			<div class="order-2 lg:order-1">
				<div class="relative group">
					<div class="image-gallery-container zoom-container">
						<img src="{{ asset('img/aboutus/iso2015.jpg') }}" alt="ISO 9001:2015 Certificate" loading="lazy"
							class="main-image zoom-image rounded-lg shadow-2xl w-full h-96 object-cover cursor-pointer slide-in">
					</div>

					<div class="absolute -bottom-6 -right-6 bg-blue-600 p-6 rounded-lg shadow-xl hover:scale-110 transition-transform duration-300 cursor-pointer">
						<i class="fas fa-certificate text-white text-3xl"></i>
					</div>
				</div>
			</div>

			<div class="order-1 lg:order-2 lg:min-h-[32rem] flex flex-col">
				<h3 class="text-2xl md:text-3xl font-bold mb-6 text-blue-300 leading-snug md:leading-tight tracking-wide">ISO 9001:2015 Certification</h3>
				<div class="mission-content">
					<p class="text-gray-300 mb-3 text-lg leading-relaxed text-justify" style="text-align: justify !important;">
						Our ISO 9001:2015 certification is issued by Guardian Independent Certification Group (GIC Group Pte Ltd), an internationally accredited certification body based in Singapore.
					</p>
					<p class="text-gray-300 mb-3 text-lg leading-relaxed text-justify" style="text-align: justify !important;">
						Through a comprehensive third-party audit, our quality management system has been formally recognized for the design, assembly, and testing of junction boxes, pulling boxes, signaling equipment, and control systems.
					</p>
					<p class="text-gray-300 mb-6 text-lg leading-relaxed text-justify" style="text-align: justify !important;">
						This certification reflects our dedication to excellence and positions EPBOX ENGINEERING as a trusted partner for industrial automation solutions worldwide.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Timeline Section -->
<section class="py-20 px-6 relative overflow-hidden fade-section">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/img_asset/control_panel4.jpg') }}'); background-size: 120%;"></div>
	<div class="absolute inset-0" style="background: linear-gradient(rgba(15,28,63,0.7), rgba(15,28,63,0.9));"></div>
	<!-- Decorative Shapes Overlay -->
	<div class="absolute inset-0 opacity-70 pointer-events-none">
		<div class="absolute -top-10 left-8 w-48 h-48 bg-blue-500/30 rounded-full blur-3xl"></div>
		<div class="absolute top-1/3 right-12 w-64 h-64 bg-indigo-500/25 rounded-full blur-3xl"></div>
		<div class="absolute bottom-10 left-1/4 w-56 h-56 bg-blue-400/20 rounded-full blur-3xl"></div>
	</div>

	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300">Our Journey</h2>
			<div class="w-32 h-1 bg-blue-500 mx-auto mb-6"></div>
		</div>
		<div class="grid md:grid-cols-2 gap-12">
			<div class="space-y-8">
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300">2017 - Foundation</h3>
					<p class="text-gray-300">Epbox Engineering was founded with a vision to revolutionize industrial control systems through innovative panel manufacturing.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300">2019 - Technology Center</h3>
					<p class="text-gray-300">Opened our state-of-the-art technology center for advanced control panel development and testing.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300">2021 - Global Expansion</h3>
					<p class="text-gray-300">Expanded operations to serve international markets, establishing partnerships across multiple continents.</p>
				</div>
			</div>
			<div class="space-y-8">
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300">2022 - Digital Transformation</h3>
					<p class="text-gray-300">Implemented IoT integration and smart manufacturing processes for enhanced efficiency and quality control.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300">2024 - ISO Certification</h3>
					<p class="text-gray-300">Achieved ISO 9001:2015 certification, establishing our commitment to quality management and continuous improvement.</p>
				</div>
				<div class="timeline-item">
					<h3 class="text-xl font-semibold mb-2 text-blue-300">2024 - Industry Leadership</h3>
					<p class="text-gray-300">Recognized as a leading manufacturer with 150+ successful projects and 40+ countries served worldwide.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Values Section -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6">Our Values</h2>
			<div class="w-32 h-1 bg-white mx-auto mb-6"></div>
		</div>
		<div class="grid md:grid-cols-3 gap-8">
			<div class="about-card p-8 rounded-lg text-center bg-white/10 backdrop-blur-sm border border-white/20">
				<div class="text-blue-400 text-5xl mb-6"><i class="fas fa-lightbulb"></i></div>
				<h3 class="text-xl font-semibold mb-4 text-white">Innovation</h3>
				<p class="text-gray-200">Continuously developing cutting-edge control panel technologies and solutions to meet evolving industry demands and stay ahead of market trends.</p>
			</div>
			<div class="about-card p-8 rounded-lg text-center bg-white/10 backdrop-blur-sm border border-white/20">
				<div class="text-blue-400 text-5xl mb-6"><i class="fas fa-shield-alt"></i></div>
				<h3 class="text-xl font-semibold mb-4 text-white">Quality</h3>
				<p class="text-gray-200">Maintaining the highest standards in manufacturing and testing to ensure reliable, safe, and durable control panels that exceed industry standards.</p>
			</div>
			<div class="about-card p-8 rounded-lg text-center bg-white/10 backdrop-blur-sm border border-white/20">
				<div class="text-blue-400 text-5xl mb-6"><i class="fas fa-globe"></i></div>
				<h3 class="text-xl font-semibold mb-4 text-white">Global Compliance</h3>
				<p class="text-gray-200">Meeting regulatory requirements across multiple countries and industry-specific standards.</p>
			</div>
		</div>
	</div>
</section>

<!-- Core Expertise Section -->
<section class="py-20 px-6 bg-gray-900 relative overflow-hidden fade-section">
	<div class="floating-orb orb1"></div>
	<div class="floating-orb orb2"></div>
	<div class="floating-orb orb3"></div>
	<div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6 text-blue-300">Core Expertise</h2>
			<div class="w-32 h-1 bg-blue-500 mx-auto mb-6"></div>
		</div>

		<div class="max-w-4xl mx-auto text-center mb-12">
			<p class="text-xl text-gray-300 leading-relaxed mb-8">
				Our expertise encompasses various technical fields that form the foundation for the success of every project. We specialize in delivering comprehensive solutions that integrate multiple disciplines seamlessly.
			</p>
		</div>

		<!-- Core Expertise Grid -->
		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
			<!-- I/O Mapping -->
			<div class="expertise-card group">
				<div class="bg-gradient-to-br from-cyan-500 to-blue-600 p-8 rounded-2xl text-center transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
					<div class="text-white text-5xl mb-6 group-hover:rotate-12 transition-transform duration-500">
						<i class="fas fa-sitemap"></i>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4">I/O Mapping</h3>
					<p class="text-blue-100 leading-relaxed">Comprehensive input-output mapping for enhanced system accuracy and functional optimization across all industrial processes.</p>
				</div>
			</div>

			<!-- P&ID Design -->
			<div class="expertise-card group">
				<div class="bg-gradient-to-br from-purple-500 to-pink-600 p-8 rounded-2xl text-center transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
					<div class="text-white text-5xl mb-6 group-hover:rotate-12 transition-transform duration-500">
						<i class="fas fa-project-diagram"></i>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4">P&ID Design</h3>
					<p class="text-purple-100 leading-relaxed">Expert interpretation and implementation of Piping and Instrumentation Diagrams for seamless system integration.</p>
				</div>
			</div>

			<!-- HMI Development -->
			<div class="expertise-card group">
				<div class="bg-gradient-to-br from-green-500 to-teal-600 p-8 rounded-2xl text-center transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
					<div class="text-white text-5xl mb-6 group-hover:rotate-12 transition-transform duration-500">
						<i class="fas fa-desktop"></i>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4">HMI Development</h3>
					<p class="text-green-100 leading-relaxed">Intuitive Human-Machine Interface design for effective control systems and enhanced user experience.</p>
				</div>
			</div>

			<!-- Ex Panel Design -->
			<div class="expertise-card group">
				<div class="bg-gradient-to-br from-orange-500 to-red-600 p-8 rounded-2xl text-center transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
					<div class="text-white text-5xl mb-6 group-hover:rotate-12 transition-transform duration-500">
						<i class="fas fa-shield-alt"></i>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4">Ex Panel Design</h3>
					<p class="text-orange-100 leading-relaxed">Explosion-proof panel design for hazardous environments, compliant with international safety standards.</p>
				</div>
			</div>

			<!-- Industrial Networking -->
			<div class="expertise-card group">
				<div class="bg-gradient-to-br from-yellow-500 to-orange-600 p-8 rounded-2xl text-center transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
					<div class="text-white text-5xl mb-6 group-hover:rotate-12 transition-transform duration-500">
						<i class="fas fa-network-wired"></i>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4">Industrial Networking</h3>
					<p class="text-yellow-100 leading-relaxed">Secure and reliable industrial network solutions ensuring uninterrupted connectivity and data transmission.</p>
				</div>
			</div>

			<!-- Oil & Gas Solutions -->
			<div class="expertise-card group">
				<div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-8 rounded-2xl text-center transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
					<div class="text-white text-5xl mb-6 group-hover:rotate-12 transition-transform duration-500">
						<i class="fas fa-oil-can"></i>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4">Oil & Gas Solutions</h3>
					<p class="text-indigo-100 leading-relaxed">Specialized control systems for upstream, midstream, and downstream operations with ATEX compliance and real-time monitoring.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Commitment to Quality & Excellence Section -->
<section class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
	<div class="max-w-7xl mx-auto relative z-10 text-center">
		<!-- Header dengan format yang sama seperti Our Values -->
		<div class="mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6">Commitment to Quality</h2>
			<div class="w-32 h-1 bg-white mx-auto mb-6"></div>
		</div>

		<div class="max-w-4xl mx-auto text-center mb-12">
			<p class="text-lg text-gray-300 leading-relaxed">
				We are committed to delivering solutions. We follow strict international standards, ensuring that the systems we install operate with maximum reliability and safety. With a comprehensive approach, from planning to implementation, we maintain quality at every stage, guaranteeing the success of every project.
			</p>
		</div>

		<!-- Quality Pillars -->
		<div class="grid md:grid-cols-3 gap-8 mb-12">
			<div class="quality-pillar">
				<div class="text-blue-400 text-4xl mb-4"><i class="fas fa-award"></i></div>
				<h3 class="text-xl font-semibold text-white mb-3">International Standards</h3>
				<p class="text-gray-300">Following strict international standards in design and manufacturing</p>
			</div>
			<div class="quality-pillar">
				<div class="text-blue-400 text-4xl mb-4"><i class="fas fa-shield-alt"></i></div>
				<h3 class="text-xl font-semibold text-white mb-3">Maximum Reliability</h3>
				<p class="text-gray-300">Ensuring systems operate with maximum reliability and safety</p>
			</div>
			<div class="quality-pillar">
				<div class="text-blue-400 text-4xl mb-4"><i class="fas fa-cogs"></i></div>
				<h3 class="text-xl font-semibold text-white mb-3">Holistic Approach</h3>
				<p class="text-gray-300">Quality maintained at every stage from planning to implementation</p>
			</div>
		</div>

		<!-- Call to Action -->
		<div class="flex flex-col sm:flex-row gap-4 justify-center">
			<a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Get Free Quote</a>
			<a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">View Our Projects</a>
		</div>
	</div>
</section>

<!-- Leadership & Teams Section - HIDDEN -->
<!-- <section id="team" class="py-20 px-6 gradient-bg relative overflow-hidden fade-section"> -->
<!-- <div class="max-w-7xl mx-auto relative z-10">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-4xl font-bold mb-6">Our Leadership</h2>
			<div class="w-32 h-1 bg-white mx-auto mb-6"></div>
		</div>
		<div class="mb-20">
			<div class="about-card p-10 rounded-xl text-center mx-auto max-w-xl md:aspect-square flex flex-col justify-center">
				<img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Erping Lee" class="w-36 h-36 object-cover rounded-full mx-auto mb-8 border-4 border-blue-400 shadow-lg">
				<h3 class="text-3xl font-bold mb-4 text-blue-300">Erping Lee</h3>
				<p class="text-blue-400 text-xl mb-6">CEO & Founder</p>
				<p class="text-gray-300 text-lg leading-relaxed max-w-3xl mx-auto">Visionary leader with a passion for industrial automation and control systems. Founded Epbox Engineering and leads the company with innovation and integrity.</p>
			</div>
		</div>

		<div class="text-center mt-8 mb-16">
			<h3 class="text-2xl md:text-3xl font-bold mb-6">Our Department Teams</h3>
			<div class="w-24 h-1 bg-blue-400 mx-auto mb-6"></div>
		</div>

		<div class="mb-16">
			<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Anggi Simanjuntak" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Anggi Simanjuntak</h5>
					<p class="text-blue-400 mb-3">Marketing Specialist</p>
					<p class="text-gray-300 text-sm">Creative marketing professional with expertise in industrial B2B marketing and brand development.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/women/66.jpg" alt="Irene Tesalonika" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Irene Tesalonika</h5>
					<p class="text-blue-400 mb-3">Marketing Specialist</p>
					<p class="text-gray-300 text-sm">Digital marketing and communications expert, focused on lead generation and client engagement.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Lisa Chen" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Lisa Chen</h5>
					<p class="text-blue-400 mb-3">Finance Manager</p>
					<p class="text-gray-300 text-sm">Certified accountant with 10+ years experience in financial planning and business strategy.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Muhammad Dody" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Muhammad Dody</h5>
					<p class="text-blue-400 mb-3">IT Specialist</p>
					<p class="text-gray-300 text-sm">IT infrastructure and digital security specialist, ensuring robust and reliable company systems.</p>
				</div>
			</div>
		</div>

		<div class="mb-16">
			<h4 class="text-xl font-semibold mb-8 text-center text-blue-300"><i class="fas fa-cogs mr-3"></i>Engineering Team</h4>
			<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/12.jpg" alt="Junned" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Junned</h5>
					<p class="text-blue-400 mb-3">Engineer</p>
					<p class="text-gray-300 text-sm">Specialist in control system design and industrial automation solutions.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Richard" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Richard</h5>
					<p class="text-blue-400 mb-3">Engineer</p>
					<p class="text-gray-300 text-sm">Experienced in PLC programming and industrial automation systems.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/50.jpg" alt="Galih" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Galih</h5>
					<p class="text-blue-400 mb-3">Engineer</p>
					<p class="text-gray-300 text-sm">Focused on SCADA integration and real-time monitoring solutions.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/68.jpg" alt="Ryan" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Ryan</h5>
					<p class="text-blue-400 mb-3">Engineer</p>
					<p class="text-gray-300 text-sm">Expert in IoT integration and smart manufacturing technologies.</p>
				</div>
			</div>
		</div>

		<div class="mb-16">
			<h4 class="text-xl font-semibold mb-8 text-center text-blue-300"><i class="fas fa-industry mr-3"></i>Production Team</h4>
			<div class="grid md:grid-cols-3 gap-8 items-stretch">
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/36.jpg" alt="Hafidz" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Hafidz</h5>
					<p class="text-blue-400 mb-3">Production Staff</p>
					<p class="text-gray-300 text-sm">Skilled in control panel assembly and production processes.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/53.jpg" alt="Yudha" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Yudha</h5>
					<p class="text-blue-400 mb-3">Production Staff</p>
					<p class="text-gray-300 text-sm">Experienced in quality control and production line management.</p>
				</div>
				<div class="about-card p-6 rounded-lg text-center flex flex-col items-center h-full">
					<img src="https://randomuser.me/api/portraits/men/77.jpg" alt="Bang Lea" class="w-24 h-24 object-cover rounded-full mx-auto mb-4 border-2 border-blue-400 shadow">
					<h5 class="text-lg font-semibold mb-2">Bang Lea</h5>
					<p class="text-blue-400 mb-3">Leader Production</p>
					<p class="text-gray-300 text-sm">Leader of the production team, ensuring high standards and efficient workflow.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->

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