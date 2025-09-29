@extends('site.layouts.app')

@section('title', 'News & Updates - Epbox Engineering')

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
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">NEWS & <span class="text-blue-300">UPDATES</span></h1>
        <div class="w-24 sm:w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-4 sm:mb-6"></div>
        <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Stay updated with our latest projects, partnerships, achievements, and industry insights from EPBOX ENGINEERING</p>
    </div>
</section>

<!-- News Section -->
<section class="py-12 sm:py-20 px-4 sm:px-6 relative overflow-hidden fade-section">
    <!-- Canvas Background -->
    <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500  blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500  blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400  blur-2xl animate-pulse delay-500"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 section-title" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">LATEST NEWS</h2>
            <div class="w-32 h-1 bg-white mx-auto mb-6"></div>
        </div>

        <!-- News Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <!-- News 1: Kerjasama Lanjutan -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20  overflow-hidden hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('img/epbox/gambar15.png') }}" alt="Partnership Agreement" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 px-3 py-1 text-xs font-semibold">Partnership</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-calendar-alt text-blue-400 mr-2"></i>
                        <span class="text-gray-400 text-sm">December 2024</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-3 group-hover:text-blue-300 transition-colors">
                        Extended Partnership with MODEC
                    </h3>
                    <p class="text-gray-300 text-sm mb-4">
                        EPBOX Engineering extends strategic partnership with MODEC for development of next-generation FPSO control systems with ATEX/IECEx certified technology.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-400 text-xs font-medium">Read More</span>
                        <i class="fas fa-arrow-right text-blue-400 text-xs group-hover:translate-x-1 transition-transform"></i>
        </div>
    </div>
</div>

            <!-- News 2: Project Baru -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20  overflow-hidden hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('img/epbox/gambar22.jpg') }}" alt="New Project Launch" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-600 px-3 py-1  text-xs font-semibold">New Project</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-calendar-alt text-blue-400 mr-2"></i>
                        <span class="text-gray-400 text-sm">January 2025</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-3 group-hover:text-blue-300 transition-colors">
                        New Project: Smart Grid Integration
                    </h3>
                    <p class="text-gray-300 text-sm mb-4">
                        Launching new project for smart grid integration with distributed control systems to enhance energy efficiency in manufacturing industries.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-400 text-xs font-medium">Read More</span>
                        <i class="fas fa-arrow-right text-blue-400 text-xs group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
        </div>
        
            <!-- News 3: Selesainya Project -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20  overflow-hidden hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('img/epbox/gambar8.png') }}" alt="Project Completion" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-600 px-3 py-1  text-xs font-semibold">Completed</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-calendar-alt text-blue-400 mr-2"></i>
                        <span class="text-gray-400 text-sm">November 2024</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-3 group-hover:text-blue-300 transition-colors">
                        SCADA Integration Project Completion
                    </h3>
                    <p class="text-gray-300 text-sm mb-4">
                        Successfully completed SCADA integration project for IndoCement with real-time monitoring system and automated control for production processes.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-400 text-xs font-medium">Read More</span>
                        <i class="fas fa-arrow-right text-blue-400 text-xs group-hover:translate-x-1 transition-transform"></i>
                    </div>
        </div>
      </div>

            <!-- News 4: Testing FAT Aplikasi -->
            <div class="group bg-gradient-to-br from-blue-900/20 to-blue-800/10 border border-blue-500/20  overflow-hidden hover:border-blue-400/40 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('img/epbox/gambar31.png') }}" alt="FAT Testing" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-orange-600 px-3 py-1  text-xs font-semibold">Testing</span>
                </div>
              </div>
              <div class="p-6">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-calendar-alt text-blue-400 mr-2"></i>
                        <span class="text-gray-400 text-sm">December 2024</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-3 group-hover:text-blue-300 transition-colors">
                        New Application FAT Testing
                </h3>
                    <p class="text-gray-300 text-sm mb-4">
                        Conducting Factory Acceptance Testing (FAT) for latest control panel application with IEC 61850 standard for protection and control systems.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-blue-400 text-xs font-medium">Read More</span>
                        <i class="fas fa-arrow-right text-blue-400 text-xs group-hover:translate-x-1 transition-transform"></i>
                </div>
              </div>
            </div>
        </div>
        
        <!-- View All News Button -->
        <div class="text-center mt-12">
            <a href="{{ route('site.home') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-4  font-semibold transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
                <i class="fas fa-home"></i>
                <span>Back to Home</span>
                <i class="fas fa-arrow-right"></i>
          </a>
        </div>
    </div>
  </section>

@endsection

@push('styles')
<style>
/* News Cards Styling */
.news-card {
    transition: all 0.3s ease;
}

.news-card:hover {
    transform: translateY(-5px);
}

/* Category Badge Colors */
.bg-blue-600 { background-color: #2563eb; }
.bg-green-600 { background-color: #16a34a; }
.bg-purple-600 { background-color: #9333ea; }
.bg-orange-600 { background-color: #ea580c; }

/* Hover Effects */
.group:hover .group-hover\:text-blue-300 {
    color: #93c5fd;
}

.group:hover .group-hover\:scale-105 {
    transform: scale(1.05);
}

.group:hover .group-hover\:translate-x-1 {
    transform: translateX(0.25rem);
}

/* Gradient Background */
.gradient-bg {
    background: linear-gradient(135deg, #0f1c3f 0%, #1e3a8a 100%);
}

/* Canvas Animation */
.x-canvas-net {
    background-image: 
        linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: canvasMove 20s linear infinite;
}

@keyframes canvasMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
}

/* Fade Section Animation */
.fade-section {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
}

.fade-section.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Interactive Background Elements */
.interactive-bg {
    position: absolute;
    inset: 0;
    pointer-events: none;
}

.interactive-bg > div {
    position: absolute;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-20px) scale(1.1); }
}

/* Floating Orbs */
.floating-orb {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.2) 0%, transparent 70%);
    animation: floatOrb 8s ease-in-out infinite;
    pointer-events: none;
}

.floating-orb.orb1 {
    width: 80px;
    height: 80px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.floating-orb.orb2 {
    width: 120px;
    height: 120px;
    top: 60%;
    right: 15%;
    animation-delay: 2s;
}

.floating-orb.orb3 {
    width: 60px;
    height: 60px;
    bottom: 20%;
    left: 20%;
    animation-delay: 4s;
}

@keyframes floatOrb {
    0%, 100% { transform: translateY(0px) translateX(0px) scale(1); }
    25% { transform: translateY(-30px) translateX(10px) scale(1.1); }
    50% { transform: translateY(-20px) translateX(-10px) scale(0.9); }
    75% { transform: translateY(-40px) translateX(5px) scale(1.05); }
}
</style>
@endpush

@push('scripts')
<script>
// Fade section animation
document.addEventListener('DOMContentLoaded', function() {
    const fadeSections = document.querySelectorAll('.fade-section');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });
    
    fadeSections.forEach(section => {
        observer.observe(section);
    });
});
</script>
@endpush