@extends('site.layouts.app')

@section('title', 'Capabilities Reference | EPBOX Engineering')

@section('content')
<!-- Reference Section -->
<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
    <!-- Canvas Background -->
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400 rounded-full blur-2xl animate-pulse delay-500"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-4 section-title">Our Capabilities - Reference Designs</h2>
            <div class="w-32 h-1 bg-white mx-auto mb-6"></div>
            <p class="text-xl text-gray-300 max-w-4xl mx-auto">
                Different design approaches for showcasing our engineering capabilities and expertise.
            </p>
        </div>

        <!-- Opsi 1: Card Grid dengan Icons & Images -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-white mb-8 text-center">Opsi 1: Card Grid dengan Icons & Images</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
                <!-- Control Panel Engineering -->
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-center w-16 h-16 bg-blue-600 rounded-xl mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-drafting-compass text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3 group-hover:text-blue-300 transition-colors">Control Panel Engineering</h3>
                        <p class="text-gray-300 text-sm text-center leading-relaxed">Complete design and manufacturing of LV panels, MCC, and PLC systems with full documentation and FAT testing.</p>
                    </div>
                </div>

                <!-- Automation Integration -->
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-center w-16 h-16 bg-cyan-600 rounded-xl mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-robot text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3 group-hover:text-cyan-300 transition-colors">Automation Integration</h3>
                        <p class="text-gray-300 text-sm text-center leading-relaxed">Seamless integration of PLC, SCADA, and HMI systems for intelligent industrial automation solutions.</p>
                    </div>
                </div>

                <!-- System Integration Solutions -->
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-center w-16 h-16 bg-green-600 rounded-xl mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-project-diagram text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3 group-hover:text-green-300 transition-colors">System Integration Solutions</h3>
                        <p class="text-gray-300 text-sm text-center leading-relaxed">End-to-end system integration with robust networking and communication protocols for critical operations.</p>
                    </div>
                </div>

                <!-- Engineering & Technical Support -->
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-center w-16 h-16 bg-purple-600 rounded-xl mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-headset text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3 group-hover:text-purple-300 transition-colors">Engineering & Technical Support</h3>
                        <p class="text-gray-300 text-sm text-center leading-relaxed">Comprehensive technical support and engineering expertise throughout the entire project lifecycle.</p>
                    </div>
                </div>

                <!-- Safety & Compliance by Design -->
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-center w-16 h-16 bg-red-600 rounded-xl mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3 group-hover:text-red-300 transition-colors">Safety & Compliance by Design</h3>
                        <p class="text-gray-300 text-sm text-center leading-relaxed">ATEX, SIL, and marine grade compliance built into every solution for hazardous and demanding environments.</p>
                    </div>
                </div>

                <!-- Custom Solutions -->
                <div class="group relative overflow-hidden rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300 hover:transform hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-center w-16 h-16 bg-orange-600 rounded-xl mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-cogs text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-3 group-hover:text-orange-300 transition-colors">Custom Solutions</h3>
                        <p class="text-gray-300 text-sm text-center leading-relaxed">Tailored engineering solutions designed to meet specific client requirements and operational challenges.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Opsi 2: Horizontal Cards dengan Icons -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-white mb-8 text-center">Opsi 2: Horizontal Cards dengan Icons</h3>
            <div class="space-y-4 mb-10">
                <!-- Row 1 -->
                <div class="grid md:grid-cols-3 gap-4">
                    <!-- Control Panel Engineering -->
                    <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-blue-400/40 transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-drafting-compass text-white text-lg"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-white group-hover:text-blue-300 transition-colors">Control Panel Engineering</h3>
                            <p class="text-gray-300 text-sm">Complete design and manufacturing of LV panels, MCC, and PLC systems.</p>
                        </div>
                    </div>

                    <!-- Automation Integration -->
                    <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-cyan-400/40 transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-cyan-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-robot text-white text-lg"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-white group-hover:text-cyan-300 transition-colors">Automation Integration</h3>
                            <p class="text-gray-300 text-sm">Seamless integration of PLC, SCADA, and HMI systems.</p>
                        </div>
                    </div>

                    <!-- System Integration Solutions -->
                    <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-green-400/40 transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-project-diagram text-white text-lg"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-white group-hover:text-green-300 transition-colors">System Integration Solutions</h3>
                            <p class="text-gray-300 text-sm">End-to-end system integration with robust networking.</p>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="grid md:grid-cols-3 gap-4">
                    <!-- Engineering & Technical Support -->
                    <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-purple-400/40 transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-headset text-white text-lg"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-white group-hover:text-purple-300 transition-colors">Engineering & Technical Support</h3>
                            <p class="text-gray-300 text-sm">Comprehensive technical support throughout project lifecycle.</p>
                        </div>
                    </div>

                    <!-- Safety & Compliance by Design -->
                    <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-red-400/40 transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-white text-lg"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-white group-hover:text-red-300 transition-colors">Safety & Compliance by Design</h3>
                            <p class="text-gray-300 text-sm">ATEX, SIL, and marine grade compliance built-in.</p>
                        </div>
                    </div>

                    <!-- Custom Solutions -->
                    <div class="group flex items-center gap-4 p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-orange-400/40 transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-cogs text-white text-lg"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-white group-hover:text-orange-300 transition-colors">Custom Solutions</h3>
                            <p class="text-gray-300 text-sm">Tailored engineering solutions for specific requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Opsi 5: Icon Grid Style -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-white mb-8 text-center">Opsi 5: Icon Grid Style</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mb-10">
                <!-- Control Panel Engineering -->
                <div class="group text-center cursor-pointer">
                    <div class="relative mb-4">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg group-hover:shadow-blue-500/25">
                            <i class="fas fa-drafting-compass text-white text-3xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-2 group-hover:text-blue-300 transition-colors">Control Panel Engineering</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">LV panels, MCC, and PLC systems with full documentation</p>
                </div>

                <!-- Automation Integration -->
                <div class="group text-center cursor-pointer">
                    <div class="relative mb-4">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-cyan-500 to-cyan-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg group-hover:shadow-cyan-500/25">
                            <i class="fas fa-robot text-white text-3xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-cyan-600 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-2 group-hover:text-cyan-300 transition-colors">Automation Integration</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">PLC, SCADA, and HMI systems integration</p>
                </div>

                <!-- System Integration Solutions -->
                <div class="group text-center cursor-pointer">
                    <div class="relative mb-4">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg group-hover:shadow-green-500/25">
                            <i class="fas fa-project-diagram text-white text-3xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-600 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-2 group-hover:text-green-300 transition-colors">System Integration</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">End-to-end integration with robust networking</p>
                </div>

                <!-- Engineering & Technical Support -->
                <div class="group text-center cursor-pointer">
                    <div class="relative mb-4">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg group-hover:shadow-purple-500/25">
                            <i class="fas fa-headset text-white text-3xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-600 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-2 group-hover:text-purple-300 transition-colors">Technical Support</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">24/7 support throughout project lifecycle</p>
                </div>

                <!-- Safety & Compliance by Design -->
                <div class="group text-center cursor-pointer">
                    <div class="relative mb-4">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg group-hover:shadow-red-500/25">
                            <i class="fas fa-shield-alt text-white text-3xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-600 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-2 group-hover:text-red-300 transition-colors">Safety & Compliance</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">ATEX, SIL, and marine grade compliance</p>
                </div>

                <!-- Custom Solutions -->
                <div class="group text-center cursor-pointer">
                    <div class="relative mb-4">
                        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-orange-500 to-orange-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg group-hover:shadow-orange-500/25">
                            <i class="fas fa-cogs text-white text-3xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-orange-600 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold text-white mb-2 group-hover:text-orange-300 transition-colors">Custom Solutions</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">Tailored engineering for specific requirements</p>
                </div>
            </div>

            <!-- Additional Info Section -->
            <div class="mt-12 text-center">
                <div class="bg-white/5 border border-white/10 rounded-xl p-8 max-w-4xl mx-auto">
                    <h3 class="text-2xl font-bold text-white mb-4">Why Choose EPBOX?</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-award text-white text-xl"></i>
                            </div>
                            <h4 class="text-white font-semibold mb-2">Certified Excellence</h4>
                            <p class="text-gray-300 text-sm">ATEX, SIL, and marine grade certifications</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-clock text-white text-xl"></i>
                            </div>
                            <h4 class="text-white font-semibold mb-2">24/7 Support</h4>
                            <p class="text-gray-300 text-sm">Round-the-clock technical assistance</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-globe text-white text-xl"></i>
                            </div>
                            <h4 class="text-white font-semibold mb-2">Global Reach</h4>
                            <p class="text-gray-300 text-sm">Projects across 15+ countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- Values Section -->
       <section id="values" class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
           <div class="max-w-7xl mx-auto relative z-10">
               <div class="text-center mb-16">
                   <h2 class="text-3xl md:text-4xl font-bold mb-3 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Our Values</h2>
                   <div class="w-32 h-1 bg-white mx-auto mb-4"></div>
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
       
       
<!-- Our Work - Scroll-Snap Carousel (No Library) -->
<section id="work-carousel" class="py-20 px-6 relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold section-title mb-2" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR WORK – CAROUSEL</h2>
                <div class="h-1 bg-blue-500 w-28"></div>
            </div>
            <div class="flex gap-2">
                <button id="wcPrev" class="px-3 py-2 rounded bg-white/10 border border-white/20 text-white hover:bg-white/20"><i class="fas fa-chevron-left"></i></button>
                <button id="wcNext" class="px-3 py-2 rounded bg-white/10 border border-white/20 text-white hover:bg-white/20"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        <div id="wcTrack" class="relative overflow-x-auto" style="scroll-snap-type: x mandatory;">
            <div class="flex gap-4 w-max">
                <img src="{{ asset('img/epbox/gambar4.png') }}" alt="Work 1" class="w-[320px] h-56 object-cover rounded snap-start">
                <img src="{{ asset('img/epbox/gambar27.png') }}" alt="Work 2" class="w-[320px] h-56 object-cover rounded snap-start">
                <img src="{{ asset('img/epbox/gambar34.png') }}" alt="Work 3" class="w-[320px] h-56 object-cover rounded snap-start">
                <img src="{{ asset('img/epbox/gambar7.png') }}" alt="Work 4" class="w-[320px] h-56 object-cover rounded snap-start">
                <img src="{{ asset('img/epbox/panel.png') }}" alt="Work 5" class="w-[320px] h-56 object-cover rounded snap-start">
                <img src="{{ asset('img/epbox/gambar1.png') }}" alt="Work 6" class="w-[320px] h-56 object-cover rounded snap-start">
            </div>
        </div>
        <script>
            (function(){
                const track = document.getElementById('wcTrack');
                document.getElementById('wcPrev').addEventListener('click',()=>track.scrollBy({left:-360,behavior:'smooth'}));
                document.getElementById('wcNext').addEventListener('click',()=>track.scrollBy({left:360,behavior:'smooth'}));
            })();
        </script>
    </div>
</section>

<!-- Our Work - Swiper.js Coverflow Slider -->
<section id="work-swiper" class="py-20 px-6 relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold section-title mb-2" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR WORK – SWIPER</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>
        <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar4.png') }}" class="w-full h-72 object-cover rounded" alt="w1"></div>
                <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar27.png') }}" class="w-full h-72 object-cover rounded" alt="w2"></div>
                <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar34.png') }}" class="w-full h-72 object-cover rounded" alt="w3"></div>
                <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar7.png') }}" class="w-full h-72 object-cover rounded" alt="w4"></div>
                <div class="swiper-slide"><img src="{{ asset('img/epbox/panel.png') }}" class="w-full h-72 object-cover rounded" alt="w5"></div>
                <div class="swiper-slide"><img src="{{ asset('img/epbox/gambar1.png') }}" class="w-full h-72 object-cover rounded" alt="w6"></div>
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

<!-- Our Work - Masonry + Lightbox -->
<section id="work-masonry" class="py-20 px-6 relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold section-title mb-2" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR WORK – MASONRY</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>
        <style>
            #work-masonry .masonry{ column-count:1; column-gap:1rem; }
            @media(min-width:768px){ #work-masonry .masonry{ column-count:2; } }
            @media(min-width:1024px){ #work-masonry .masonry{ column-count:3; } }
            #work-masonry .masonry img{ width:100%; margin:0 0 1rem; border-radius:6px; display:block; }
            #lightboxOverlay{ position:fixed; inset:0; background:rgba(0,0,0,0.8); display:none; align-items:center; justify-content:center; z-index:1000; }
            #lightboxOverlay img{ max-width:90vw; max-height:85vh; border-radius:8px; }
        </style>
        <div class="masonry">
            <img src="{{ asset('img/epbox/gambar4.png') }}" alt="m1" class="lb-src">
            <img src="{{ asset('img/epbox/gambar27.png') }}" alt="m2" class="lb-src">
            <img src="{{ asset('img/epbox/gambar34.png') }}" alt="m3" class="lb-src">
            <img src="{{ asset('img/epbox/gambar7.png') }}" alt="m4" class="lb-src">
            <img src="{{ asset('img/epbox/panel.png') }}" alt="m5" class="lb-src">
            <img src="{{ asset('img/epbox/gambar1.png') }}" alt="m6" class="lb-src">
        </div>
        <div id="lightboxOverlay" class="flex"><img src="" alt="Preview"></div>
        <script>
            (function(){
                const overlay=document.getElementById('lightboxOverlay');
                const img=overlay.querySelector('img');
                document.querySelectorAll('#work-masonry .lb-src').forEach(el=>{
                    el.addEventListener('click',()=>{ img.src=el.src; overlay.style.display='flex'; });
                });
                overlay.addEventListener('click',()=>{ overlay.style.display='none'; img.src=''; });
            })();
        </script>
    </div>
</section>

<!-- Our Work - Horizontal Filmstrip (Draggable) -->
<section id="work-filmstrip" class="py-20 px-6 relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold section-title mb-2" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR WORK – FILMSTRIP</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>
        <div id="filmstrip" class="overflow-x-auto select-none">
            <div class="flex gap-4 w-max">
                <img src="{{ asset('img/epbox/gambar4.png') }}" class="h-40 w-auto rounded" alt="f1">
                <img src="{{ asset('img/epbox/gambar27.png') }}" class="h-40 w-auto rounded" alt="f2">
                <img src="{{ asset('img/epbox/gambar34.png') }}" class="h-40 w-auto rounded" alt="f3">
                <img src="{{ asset('img/epbox/gambar7.png') }}" class="h-40 w-auto rounded" alt="f4">
                <img src="{{ asset('img/epbox/panel.png') }}" class="h-40 w-auto rounded" alt="f5">
                <img src="{{ asset('img/epbox/gambar1.png') }}" class="h-40 w-auto rounded" alt="f6">
            </div>
        </div>
        <script>
            (function(){
                const el=document.getElementById('filmstrip');
                let isDown=false, startX=0, scrollLeft=0;
                el.addEventListener('mousedown',(e)=>{ isDown=true; startX=e.pageX-el.offsetLeft; scrollLeft=el.scrollLeft; });
                el.addEventListener('mouseleave',()=>{ isDown=false; });
                el.addEventListener('mouseup',()=>{ isDown=false; });
                el.addEventListener('mousemove',(e)=>{ if(!isDown) return; e.preventDefault(); const x=e.pageX-el.offsetLeft; const walk=(x-startX)*1.5; el.scrollLeft=scrollLeft-walk; });
                el.addEventListener('wheel',(e)=>{ if(Math.abs(e.deltaY)>Math.abs(e.deltaX)){ el.scrollBy({left:e.deltaY, behavior:'smooth'}); e.preventDefault(); } }, {passive:false});
            })();
        </script>
    </div>
</section>

<!-- Before / After Slider Section -->
<section id="before-after" class="py-20 px-6 relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">BEFORE / AFTER</h2>
            <div class="w-32 h-1 bg-blue-500 mx-auto mb-4"></div>
            <p class="text-gray-300 max-w-3xl mx-auto">Slide to compare our panel build progress from raw to finished and on-site.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Slider 1 -->
            <div class="ba-card bg-white/5 border border-white/10 rounded-sm p-4">
                <div class="ba-container relative overflow-hidden rounded-sm" style="height: 260px;">
                    <img src="{{ asset('img/epbox/gambar4.png') }}" alt="Before" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none">
                    <div class="ba-overlay absolute inset-0 overflow-hidden" style="width: 50%;">
                        <img src="{{ asset('img/epbox/panel.png') }}" alt="After" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none">
                    </div>
                    <div class="ba-handle absolute top-1/2 -translate-y-1/2 bg-blue-500 h-8 w-8 rounded-full shadow flex items-center justify-center text-white" style="left: calc(50% - 16px); z-index: 2;">
                        <i class="fas fa-arrows-alt-h text-sm"></i>
                    </div>
                </div>
                <input type="range" class="ba-range w-full mt-3" min="0" max="100" value="50" aria-label="Compare slider 1">
                <div class="flex justify-between text-gray-300 text-sm mt-2"><span>Before</span><span>After</span></div>
            </div>

            <!-- Slider 2 -->
            <div class="ba-card bg-white/5 border border-white/10 rounded-sm p-4">
                <div class="ba-container relative overflow-hidden rounded-sm" style="height: 260px;">
                    <img src="{{ asset('img/epbox/gambar27.png') }}" alt="Before" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none">
                    <div class="ba-overlay absolute inset-0 overflow-hidden" style="width: 50%;">
                        <img src="{{ asset('img/epbox/gambar34.png') }}" alt="After" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none">
                    </div>
                    <div class="ba-handle absolute top-1/2 -translate-y-1/2 bg-blue-500 h-8 w-8 rounded-full shadow flex items-center justify-center text-white" style="left: calc(50% - 16px); z-index: 2;">
                        <i class="fas fa-arrows-alt-h text-sm"></i>
                    </div>
                </div>
                <input type="range" class="ba-range w-full mt-3" min="0" max="100" value="50" aria-label="Compare slider 2">
                <div class="flex justify-between text-gray-300 text-sm mt-2"><span>Before</span><span>After</span></div>
            </div>

            <!-- Slider 3 -->
            <div class="ba-card bg-white/5 border border-white/10 rounded-sm p-4">
                <div class="ba-container relative overflow-hidden rounded-sm" style="height: 260px;">
                    <img src="{{ asset('img/epbox/gambar1.png') }}" alt="Before" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none">
                    <div class="ba-overlay absolute inset-0 overflow-hidden" style="width: 50%;">
                        <img src="{{ asset('img/epbox/gambar7.png') }}" alt="After" class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none">
                    </div>
                    <div class="ba-handle absolute top-1/2 -translate-y-1/2 bg-blue-500 h-8 w-8 rounded-full shadow flex items-center justify-center text-white" style="left: calc(50% - 16px); z-index: 2;">
                        <i class="fas fa-arrows-alt-h text-sm"></i>
                    </div>
                </div>
                <input type="range" class="ba-range w-full mt-3" min="0" max="100" value="50" aria-label="Compare slider 3">
                <div class="flex justify-between text-gray-300 text-sm mt-2"><span>Before</span><span>After</span></div>
            </div>
        </div>

        <script>
            (function(){
                const cards = document.querySelectorAll('#before-after .ba-card');
                cards.forEach(card => {
                    const range = card.querySelector('.ba-range');
                    const overlay = card.querySelector('.ba-overlay');
                    const handle = card.querySelector('.ba-handle');
                    if(!range || !overlay || !handle) return;
                    const update = (val)=>{
                        const pct = Math.max(0, Math.min(100, Number(val)));
                        overlay.style.width = pct + '%';
                        handle.style.left = 'calc(' + pct + '% - 16px)';
                    };
                    range.addEventListener('input', e => update(e.target.value));
                    update(range.value);
                });
            })();
        </script>
    </div>
    
</section>

<!-- Our Work Section -->
<section id="our-work" class="py-20 px-6 relative overflow-hidden fade-section">
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR WORK</h2>
            <div class="w-32 h-1 bg-blue-500 mx-auto mb-4"></div>
            <p class="text-gray-300 max-w-3xl mx-auto">A glimpse of our team and panels in action across workshop and site.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group rounded-sm overflow-hidden relative">
                <img src="{{ asset('img/epbox/gambar4.png') }}" alt="Workshop Panel Assembly" loading="lazy" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
            </div>
            <div class="group rounded-sm overflow-hidden relative">
                <img src="{{ asset('img/epbox/gambar27.png') }}" alt="Field Installation" loading="lazy" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
            </div>
            <div class="group rounded-sm overflow-hidden relative">
                <img src="{{ asset('img/epbox/gambar34.png') }}" alt="Testing & Commissioning" loading="lazy" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
            </div>
            <div class="group rounded-sm overflow-hidden relative">
                <img src="{{ asset('img/epbox/gambar7.png') }}" alt="Control Room Integration" loading="lazy" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
            </div>
            <div class="group rounded-sm overflow-hidden relative">
                <img src="{{ asset('img/epbox/panel.png') }}" alt="Panel Fabrication" loading="lazy" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
            </div>
            <div class="group rounded-sm overflow-hidden relative">
                <img src="{{ asset('img/epbox/gambar1.png') }}" alt="On-site Work" loading="lazy" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('site.portfolio.index') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
                <i class="fas fa-images"></i>
                <span>View More Works</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/site.css') }}">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="{{ asset('js/site.js') }}"></script>
@endpush
