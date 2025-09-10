@extends('site.layouts.app')

@section('title', 'Epbox Engineering | Panel Manufacturer & Control System Solutions')

@section('content')
<!-- Home Section -->
<section id="home" class="hero pt-32 pb-20 px-6 flex items-center relative fade-section">
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
    <div class="hero-content max-w-7xl mx-auto text-center md:text-left">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight" id="hero-title">
            Professional <span class="text-blue-300">Panel Manufacturing</span><br>& Control System Solutions
        </h1>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto md:mx-0" id="hero-description">
            Specialized manufacturer of electrical control panels and control panel systems. We deliver reliable, customized solutions for industrial automation and control applications across various industries.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start" id="hero-buttons">
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
<section id="about" class="py-20 px-6 bg-gray-900 relative overflow-hidden fade-section">
    <!-- Interactive Background Elements -->
    <div class="interactive-bg">
        <div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
        <div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
        <div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
    </div>

    <!-- Floating Orbs -->
    <div class="floating-orb orb1"></div>
    <div class="floating-orb orb2"></div>
    <div class="floating-orb orb3"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-20 md:mb-24">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 about-title">About Us</h2>
            <div class="w-20 h-1 bg-blue-500 mx-auto mb-10 about-underline"></div>
        </div>
        <!-- Main About Content -->
        <div class="grid lg:grid-cols-2 gap-12 items-start mt-12 md:mt-16 mb-12 md:mb-16">
            <div class="order-2 lg:order-1">
                <div class="relative group">
                    <div class="image-gallery-container zoom-container">
                        <img src="{{ asset('img/logo_login.jpg') }}" alt="Control panel showcase" loading="lazy"
                            class="main-image zoom-image rounded-lg shadow-2xl w-full h-96 object-cover cursor-pointer slide-in"
                            id="mainImage">

                        <!-- Image gallery thumbnails -->
                        <div class="absolute bottom-4 left-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-12 h-12 rounded border-2 border-white cursor-pointer overflow-hidden image-thumbnail active" onclick="changeImage('{{ asset('img/logo_login.jpg') }}', 0)">
                                <img src="{{ asset('img/logo_login.jpg') }}" alt="Logo" class="w-full h-full object-cover">
                            </div>
                            <div class="w-12 h-12 rounded border-2 border-white cursor-pointer overflow-hidden image-thumbnail" onclick="changeImage('{{ asset('img/aboutus/aboutus2.jpg') }}', 1)">
                                <img src="{{ asset('img/aboutus/aboutus2.jpg') }}" alt="About Us 2" class="w-full h-full object-cover">
                            </div>
                            <div class="w-12 h-12 rounded border-2 border-white cursor-pointer overflow-hidden image-thumbnail" onclick="changeImage('{{ asset('img/aboutus/aboutus3.jpg') }}', 2)">
                                <img src="{{ asset('img/aboutus/aboutus3.jpg') }}" alt="About Us 3" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Auto-slider indicators -->
                        <div class="absolute bottom-4 right-4 flex gap-2">
                            <div class="w-2 h-2 bg-white rounded-full opacity-60 slider-indicator active" data-index="0"></div>
                            <div class="w-2 h-2 bg-white rounded-full opacity-60 slider-indicator" data-index="1"></div>
                            <div class="w-2 h-2 bg-white rounded-full opacity-60 slider-indicator" data-index="2"></div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -right-6 bg-blue-600 p-6 rounded-lg shadow-xl hover:scale-110 transition-transform duration-300 cursor-pointer"
                        onclick="animateCounter()">
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2 lg:min-h-[32rem] flex flex-col">
                <h3 class="text-2xl md:text-3xl font-bold mb-6 text-blue-300 leading-snug md:leading-tight tracking-wide">Company Introduction</h3>
                <!-- Short About preview (no Read More) -->
                <div class="mission-content">
                    <p class="text-gray-300 mb-3 text-lg leading-relaxed text-justify" style="text-align: justify !important;">
                        EPBOX ENGINEERING is a trusted innovator in the design and manufacturing of intelligent control panels
                        and industrial automation solutions. We deliver systems that empower our clients with reliability, precision,
                        and adaptability in the most demanding environments — true to our ethos
                        <span class="italic">"Beyond Boundaries, We Command Control".</span>
                    </p>
                    <ul class="text-gray-300 text-base leading-relaxed list-disc list-inside mb-8 text-justify" style="text-align: justify !important;">
                        <li>Founded on 14 March 2017 and strategically headquartered in Singapore,
                            EPBOX ENGINEERING has grown into a recognized solutions provider for mission critical industries.</li>
                    </ul>
                    <a href="{{ route('site.about') ?? 'about.html' }}" class="inline-block text-blue-400 hover:text-blue-300 font-semibold mb-8">Learn more →</a>
                </div>



                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('site.contact') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">
                        Get Free Quote
                    </a>
                    <a href="{{ route('site.portfolio.index') }}"
                        class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">
                        View Projects
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

<!-- What We Do Section -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400 rounded-full blur-2xl animate-pulse delay-500"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">OUR EXPERTISE</h2>
            <div class="w-32 h-1 bg-white mx-auto mb-6"></div>
            <p class="text-xl text-gray-300 max-w-4xl mx-auto">
                We specialize in designing, manufacturing, and implementing intelligent control panel solutions for industrial automation.From explosion proof panels to PLC & SCADA integration delivers intelligent systems designed for safety, control, and performance.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Our Capabilities -->
            <div>
                <div class="space-y-6">
                    <div class="tech-advantage p-6 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg border border-white border-opacity-20 hover:bg-opacity-20 transition-all duration-300 group">
                        <div class="flex items-start gap-4">
                            <div class="tech-icon w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-drafting-compass text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Panel Engineering (LV, MCC, PLC, HMI solution)</h4>
                                <p class="text-gray-300 text-sm">
                                    Complete panel engineering solutions including Low Voltage, Motor Control Centers, PLC integration, and Human Machine Interface design.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-advantage p-6 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg border border-white border-opacity-20 hover:bg-opacity-20 transition-all duration-300 group">
                        <div class="flex items-start gap-4">
                            <div class="tech-icon w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-microchip text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">PLC & SCADA Programming</h4>
                                <p class="text-gray-300 text-sm">
                                    Expert programming in Siemens, Allen-Bradley, Schneider, and Mitsubishi PLCs with SCADA integration for real-time monitoring and control.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-advantage p-6 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg border border-white border-opacity-20 hover:bg-opacity-20 transition-all duration-300 group">
                        <div class="flex items-start gap-4">
                            <div class="tech-icon w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">ATEX & Offshore Compliance</h4>
                                <p class="text-gray-300 text-sm">
                                    Explosion-proof panel solutions and offshore compliance for hazardous environments with ATEX certification and marine-grade protection.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-advantage p-6 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg border border-white border-opacity-20 hover:bg-opacity-20 transition-all duration-300 group">
                        <div class="flex items-start gap-4">
                            <div class="tech-icon w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-network-wired text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Industrial Networking</h4>
                                <p class="text-gray-300 text-sm">
                                    Industrial communication networks including Ethernet, Profibus, Modbus, and wireless solutions for seamless system integration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Grid - Split into Two -->
            <div class="space-y-6 -mt-6 md:-mt-8">
                <!-- What Sets Us Apart Visual -->
                <div class="relative">
                    <div class="tech-display bg-gray-900 bg-opacity-50 backdrop-filter backdrop-blur-lg rounded-xl p-8 border border-blue-500 border-opacity-30">
                        <h4 class="text-xl font-bold mb-6 text-center text-blue-300">What Sets Us Apart</h4>

                        <div class="grid grid-cols-2 gap-6 items-start">
                            <div class="spec-item text-left p-4 bg-blue-900 bg-opacity-30 rounded-lg">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-3">
                                    <i class="fas fa-certificate text-white text-lg"></i>
                                </div>
                                <div class="text-lg font-bold text-blue-400 mb-2">ISO 9001:2015 Certified</div>
                                <p class="text-sm text-gray-300">A skilled team with proven experience in offshore, industrial, and marine grade systems</p>
                            </div>

                            <div class="spec-item text-left p-4 bg-blue-900 bg-opacity-30 rounded-lg">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-3">
                                    <i class="fas fa-rocket text-white text-lg"></i>
                                </div>
                                <div class="text-lg font-bold text-blue-400 mb-2">Turnkey Delivery</div>
                                <p class="text-sm text-gray-300">From I/O mapping, P&ID interpretation to complete SCADA deployment</p>
                            </div>

                            <div class="spec-item text-left p-4 bg-blue-900 bg-opacity-30 rounded-lg">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-3">
                                    <i class="fas fa-shield-alt text-white text-lg"></i>
                                </div>
                                <div class="text-lg font-bold text-blue-400 mb-2">Compliant Systems</div>
                                <p class="text-sm text-gray-300">Designed for IECEx, ATEX, ABS, and DNV certified environments</p>
                            </div>

                            <div class="spec-item text-left p-4 bg-blue-900 bg-opacity-30 rounded-lg">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-3">
                                    <i class="fas fa-headset text-white text-lg"></i>
                                </div>
                                <div class="text-lg font-bold text-blue-400 mb-2">Responsive Support</div>
                                <p class="text-sm text-gray-300">Rapid technical assistance and remote troubleshooting capability</p>
                            </div>
                        </div>


                    </div>

                    <!-- Floating Tech Icons -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-blue-500 rounded-full animate-ping"></div>
                    <div class="absolute -bottom-4 -right-4 w-6 h-6 bg-cyan-500 rounded-full animate-ping delay-1000"></div>
                </div>
                <!-- Our Expertise -->
                <div class="relative">
                    <!-- Floating decorative elements -->
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-yellow-400 rounded-full animate-bounce delay-300 shadow-lg shadow-yellow-400/50"></div>
                    <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-cyan-400 rounded-full animate-pulse delay-500 shadow-lg shadow-cyan-400/50"></div>
                </div>
                <!-- CTA Buttons: Industries and Projects -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('site.contact') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">
                        View Industries
                    </a>
                    <a href="{{ route('site.portfolio.index') }}"
                        class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 text-center transform hover:scale-105">
                        View Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
    <!-- Interactive Background Elements -->
    <div class="interactive-bg">
        <div class="w-20 h-20 top-10 right-10 animate-pulse delay-300"></div>
        <div class="w-16 h-16 bottom-10 left-1/3 animate-pulse delay-700"></div>
        <div class="w-28 h-28 top-1/3 right-1/4 animate-pulse delay-500"></div>
    </div>
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Services</h2>
            <div class="w-20 h-1 bg-white mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="service-card p-8 rounded-lg">
                <div class="text-blue-400 text-4xl mb-4">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Custom Control Panel Manufacturing</h3>
                <p class="text-gray-300">
                    Design and manufacture of custom electrical control panels and control panel systems for
                    industrial automation, process control, and machine operation.
                </p>
            </div>

            <div class="service-card p-8 rounded-lg">
                <div class="text-blue-400 text-4xl mb-4">
                    <i class="fas fa-microchip"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Control Panel Systems Design</h3>
                <p class="text-gray-300">
                    Complete control panel systems design including PLC programming, HMI integration, and control
                    system architecture for industrial applications.
                </p>
            </div>

            <div class="service-card p-8 rounded-lg">
                <div class="text-blue-400 text-4xl mb-4">
                    <i class="fas fa-desktop"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Panel Integration & SCADA</h3>
                <p class="text-gray-300">
                    Integration of control panels with SCADA systems for real-time monitoring and control of
                    industrial processes and equipment.
                </p>
            </div>

            <div class="service-card p-8 rounded-lg">
                <div class="text-blue-400 text-4xl mb-4">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Control Panel Installation & Commissioning</h3>
                <p class="text-gray-300">
                    Professional installation and commissioning of control panels and control panel systems,
                    including wiring, testing, and system integration.
                </p>
            </div>

            <div class="service-card p-8 rounded-lg">
                <div class="text-blue-400 text-4xl mb-4">
                    <i class="fas fa-wrench"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Panel Maintenance & Repair</h3>
                <p class="text-gray-300">
                    Preventive maintenance, troubleshooting, and repair services for control panels and control
                    panel systems.
                </p>
            </div>

            <div class="service-card p-8 rounded-lg">
                <div class="text-blue-400 text-4xl mb-4">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Safety Control Panels</h3>
                <p class="text-gray-300">
                    Emergency stop systems, safety relays, and fail-safe control panel solutions for industrial
                    safety compliance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Industries We Serve - Redesigned -->
<section id="industries" class="py-20 px-6 relative overflow-hidden fade-section">
    <!-- Interactive Background Elements (reusing site style) -->
    <div class="interactive-bg">
        <div class="w-20 h-20 top-10 right-10 animate-pulse delay-300"></div>
        <div class="w-16 h-16 bottom-10 left-1/3 animate-pulse delay-700"></div>
        <div class="w-28 h-28 top-1/3 right-1/4 animate-pulse delay-500"></div>
    </div>
    <!-- Parallax Background Elements -->
    <div class="parallax-bg">
        <div class="w-24 h-24 top-20 left-10"></div>
        <div class="w-32 h-32 bottom-20 right-10" style="animation-delay: 2s;"></div>
        <div class="w-20 h-20 top-1/2 left-1/4" style="animation-delay: 4s;"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-end justify-between mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold">Industries We Serve</h2>
                <p class="text-gray-300 mt-2">Proven deployments across mission‑critical sectors.</p>
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

        <!-- Card grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4 mb-16 md:mb-20">
            <!-- Card template: icon tile + title + bullets + CTA -->
            <div class="group rounded-xl border border-white/10 bg-white/5 backdrop-blur p-6 hover:bg-white/10 hover:border-blue-400/40 transition overflow-hidden">
                <div class="relative h-40 w-full overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('img/img_asset/power2.jpg') }}" alt="Oil & Gas" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3 w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center shadow">
                        <i class="fas fa-oil-can"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Oil & Gas</h3>
                <ul class="text-gray-300 text-sm space-y-1 mb-4">
                    <li>• Pipeline SCADA & shutdown systems</li>
                    <li>• Hazardous area (IECEx/ATEX) compliance</li>
                    <li>• FPSO, refinery, onshore facilities</li>
                </ul>
                <a href="#projects" class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 text-sm font-semibold">
                    <span>Use cases</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="group rounded-xl border border-white/10 bg-white/5 backdrop-blur p-6 hover:bg-white/10 hover:border-blue-400/40 transition overflow-hidden">
                <div class="relative h-40 w-full overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('img/img_asset/control_panel6.jpg') }}" alt="Power & Renewables" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3 w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center shadow">
                        <i class="fas fa-bolt"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Power & Renewable Energy</h3>
                <ul class="text-gray-300 text-sm space-y-1 mb-4">
                    <li>• Substation control, switchgear panels</li>
                    <li>• Solar/wind integration & telemetry</li>
                    <li>• Load shedding, protection relays</li>
                </ul>
                <a href="#projects" class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 text-sm font-semibold">
                    <span>Use cases</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="group rounded-xl border border-white/10 bg-white/5 backdrop-blur p-6 hover:bg-white/10 hover:border-blue-400/40 transition overflow-hidden">
                <div class="relative h-40 w-full overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('img/img_asset/control_panel.jpg') }}" alt="Data Centres" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3 w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center shadow">
                        <i class="fas fa-database"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Data Centres</h3>
                <ul class="text-gray-300 text-sm space-y-1 mb-4">
                    <li>• LV distribution, UPS/BMS integrations</li>
                    <li>• Redundant control & monitoring</li>
                    <li>• Cybersecure industrial networking</li>
                </ul>
                <a href="#projects" class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 text-sm font-semibold">
                    <span>Use cases</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="group rounded-xl border border-white/10 bg-white/5 backdrop-blur p-6 hover:bg-white/10 hover:border-blue-400/40 transition overflow-hidden">
                <div class="relative h-40 w-full overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('img/img_asset/panel_control2.jpg') }}" alt="Manufacturing" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3 w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center shadow">
                        <i class="fas fa-industry"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Manufacturing</h3>
                <ul class="text-gray-300 text-sm space-y-1 mb-4">
                    <li>• OEE, quality control, traceability</li>
                    <li>• PLC/SCADA for discrete & process</li>
                    <li>• Safety interlocks, E‑stop systems</li>
                </ul>
                <a href="#projects" class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 text-sm font-semibold">
                    <span>Use cases</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="group rounded-xl border border-white/10 bg-white/5 backdrop-blur p-6 hover:bg-white/10 hover:border-blue-400/40 transition overflow-hidden">
                <div class="relative h-40 w-full overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('img/img_asset/control_panel4.jpg') }}" alt="Building Automation" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3 w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center shadow">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Building Automation</h3>
                <ul class="text-gray-300 text-sm space-y-1 mb-4">
                    <li>• HVAC, lighting, security integration</li>
                    <li>• Energy optimization & metering</li>
                    <li>• Centralised BMS dashboards</li>
                </ul>
                <a href="#projects" class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 text-sm font-semibold">
                    <span>Use cases</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="group rounded-xl border border-white/10 bg-white/5 backdrop-blur p-6 hover:bg-white/10 hover:border-blue-400/40 transition overflow-hidden">
                <div class="relative h-40 w-full overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('img/img_asset/panel_control3.jpg') }}" alt="Marine & Offshore" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 left-3 w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center shadow">
                        <i class="fas fa-ship"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Marine & Offshore</h3>
                <ul class="text-gray-300 text-sm space-y-1 mb-4">
                    <li>• FPSO topside controls, utility panels</li>
                    <li>• EX‑proof designs (Ex‑de, Ex‑e, Ex‑p)</li>
                    <li>• Class approvals: ABS, DNV</li>
                </ul>
                <a href="#projects" class="inline-flex items-center gap-2 text-blue-300 hover:text-blue-200 text-sm font-semibold">
                    <span>Use cases</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
    <!-- Interactive Background Elements (match industries style) -->
    <div class="interactive-bg">
        <div class="w-20 h-20 top-10 right-10 animate-pulse delay-300"></div>
        <div class="w-16 h-16 bottom-10 left-1/3 animate-pulse delay-700"></div>
        <div class="w-28 h-28 top-1/3 right-1/4 animate-pulse delay-500"></div>
    </div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-end justify-between mb-12 md:mb-16">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold">Our Projects</h2>
                <p class="text-gray-300 mt-2">Selected work across industries and applications.</p>
            </div>
            <div class="hidden md:flex gap-3">
                <a href="{{ route('site.portfolio.index') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 transition text-white font-semibold">
                    <i class="fas fa-images"></i>
                    <span>See Projects</span>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="project-card p-6 rounded-lg">
                <img src="{{ asset('img/img_asset/control_panel 6.jpg') }}" alt="Industrial Control Panel"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Offshore Platform Control Panels</h3>
                <p class="text-gray-300 mb-4">Complete control panel system for deep-water drilling platform in Gulf
                    of Mexico.</p>
                <div class="flex justify-between items-center">
                    <span class="text-blue-400 text-sm">2023</span>
                    <span class="bg-blue-600 px-3 py-1 rounded-full text-xs">Completed</span>
                </div>
            </div>

            <div class="project-card p-6 rounded-lg">
                <img src="{{ asset('img/img_asset/panel_control2.jpg') }}" alt="Control Panel Systems"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Pipeline Control Panel Systems</h3>
                <p class="text-gray-300 mb-4">Control panel systems for 500km pipeline network monitoring in Middle
                    East.</p>
                <div class="flex justify-between items-center">
                    <span class="text-blue-400 text-sm">2023</span>
                    <span class="bg-green-600 px-3 py-1 rounded-full text-xs">Ongoing</span>
                </div>
            </div>

            <div class="project-card p-6 rounded-lg">
                <img src="{{ asset('img/img_asset/panel_control3.jpg') }}" alt="Refinery Control Panels"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Refinery Control Panel Systems</h3>
                <p class="text-gray-300 mb-4">Control panel systems upgrade for major refinery resulting in 25%
                    efficiency increase.</p>
                <div class="flex justify-between items-center">
                    <span class="text-blue-400 text-sm">2022</span>
                    <span class="bg-blue-600 px-3 py-1 rounded-full text-xs">Completed</span>
                </div>
            </div>
        </div>
</section>

<!-- Latest News from Blog Section -->
<section id="blog" class="py-20 px-6 bg-gray-900 relative overflow-hidden fade-section">
    <!-- Interactive Background Elements -->
    <div class="interactive-bg">
        <div class="w-20 h-20 top-10 right-10 animate-pulse delay-300"></div>
        <div class="w-16 h-16 bottom-10 left-1/3 animate-pulse delay-700"></div>
        <div class="w-28 h-28 top-1/3 right-1/4 animate-pulse delay-500"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-end justify-between mb-12 md:mb-16">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold">Latest Insights</h2>
                <p class="text-gray-300 mt-2">Thoughts, updates, and stories from our engineering team.</p>
            </div>
            <div class="hidden md:flex gap-3">
                <a href="{{ route('site.blog') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 transition text-white font-semibold">
                    <i class="fas fa-newspaper"></i>
                    <span>See Posts</span>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mt-4" id="blog-preview">
            <!-- Blog Post 1 -->
            <div class="blog-card group cursor-pointer bg-gray-800/50 rounded-lg overflow-hidden border border-gray-700 hover:border-blue-500 transition-all duration-300 hover:transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('img/img_asset/cpnl5.webp') }}" alt="Oil & Gas Industry Trends"
                        class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full">Industry</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Dec 15, 2024</span>
                        <i class="fas fa-clock ml-3"></i>
                        <span>5 min read</span>
                    </div>
                    <h4 class="text-white font-semibold text-lg mb-3 group-hover:text-blue-400 transition-colors">
                        Latest Trends in Oil & Gas Control Systems
                    </h4>
                    <p class="text-gray-300 text-sm mb-4 line-clamp-3">
                        Discover the latest innovations in control panel technology for the oil and gas
                        industry, including AI integration and advanced safety systems.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-400 text-sm font-medium">Read More</span>
                        <i class="fas fa-arrow-right text-blue-400 group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="blog-card group cursor-pointer bg-gray-800/50 rounded-lg overflow-hidden border border-gray-700 hover:border-blue-500 transition-all duration-300 hover:transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('img/img_asset/cpnl.jpg') }}" alt="SCADA Systems Guide"
                        class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">Technology</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Dec 12, 2024</span>
                        <i class="fas fa-clock ml-3"></i>
                        <span>7 min read</span>
                    </div>
                    <h4 class="text-white font-semibold text-lg mb-3 group-hover:text-blue-400 transition-colors">
                        SCADA Systems: The Future of Industrial Automation
                    </h4>
                    <p class="text-gray-300 text-sm mb-4 line-clamp-3">
                        Explore how modern SCADA systems are revolutionizing industrial processes with real-time
                        monitoring and predictive analytics capabilities.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-400 text-sm font-medium">Read More</span>
                        <i class="fas fa-arrow-right text-blue-400 group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="blog-card group cursor-pointer bg-gray-800/50 rounded-lg overflow-hidden border border-gray-700 hover:border-blue-500 transition-all duration-300 hover:transform hover:scale-105">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('img/img_asset/cpnl3.webp') }}" alt="Safety Standards"
                        class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-3 left-3">
                        <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">Safety</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-gray-400 text-sm mb-3">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Dec 10, 2024</span>
                        <i class="fas fa-clock ml-3"></i>
                        <span>6 min read</span>
                    </div>
                    <h4 class="text-white font-semibold text-lg mb-3 group-hover:text-blue-400 transition-colors">
                        ATEX & SIL Standards: Ensuring Safety in Hazardous Environments
                    </h4>
                    <p class="text-gray-300 text-sm mb-4 line-clamp-3">
                        Learn about the critical safety standards that protect workers and equipment in
                        explosive atmospheres and high-risk industrial operations.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-400 text-sm font-medium">Read More</span>
                        <i class="fas fa-arrow-right text-blue-400 group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section (replaces Contact/RFQ) -->
<section id="contact" class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
    <div class="max-w-7xl mx-auto relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Connect With Us</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Let’s collaborate on your vision — share your goals and we’ll co‑design a reliable, standards‑compliant control solution.</p>
        <div class="flex justify-center">
            <a href="#" onclick="openContactModal(event)" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Stay Connected</a>
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
        <h3>Chat with us</h3>
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
@endpush

@push('scripts')
<script src="{{ asset('js/site.js') }}"></script>
@endpush