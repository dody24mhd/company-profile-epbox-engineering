@extends('site.layouts.app')
@section('title','Our Services | Epbox Engineering')
@section('content')
<!-- Hero/Intro Section -->
<section class="pt-32 pb-20 px-6 gradient-bg fade-section relative services-hero">
  <!-- Particles Canvas Layer -->
  <canvas id="servicesParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">Your browser doesn't support Canvas.</canvas>
  <div class="max-w-7xl mx-auto text-center relative z-10">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">Our Services</h1>
    <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto">We believe that reliable industrial automation begins with precise design, accurate integration, and a strong commitment to quality.
      Our services are engineered to meet the demands of mission-critical sectors through robust, measurable, and internationally compliant solutions.</p>
  </div>
</section>

<!-- Key Services Overview -->
<section class="py-20 px-6 bg-gray-900 fade-section relative">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-20 left-10 w-20 h-20 bg-blue-500 rounded-full blur-xl animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-400 rounded-full blur-xl animate-pulse delay-1000"></div>
  </div>

  <div class="max-w-7xl mx-auto relative z-10">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Key Services</h2>
      <div class="w-20 h-1 bg-blue-500 mx-auto"></div>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="service-card p-8 rounded-lg text-center">
        <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-cogs"></i></div>
        <h3 class="text-xl font-semibold mb-4">Custom Control Panel Manufacturing</h3>
        <p class="text-gray-300">Design and manufacture of custom electrical control panels and systems for industrial automation, process control, and machine operation.</p>
      </div>
      <div class="service-card p-8 rounded-lg text-center">
        <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-microchip"></i></div>
        <h3 class="text-xl font-semibold mb-4">PLC Programming & Integration</h3>
        <p class="text-gray-300">Advanced PLC programming, integration, and troubleshooting for seamless industrial automation and process control.</p>
      </div>
      <div class="service-card p-8 rounded-lg text-center">
        <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-desktop"></i></div>
        <h3 class="text-xl font-semibold mb-4">SCADA Systems</h3>
        <p class="text-gray-300">SCADA system design, implementation, and integration for real-time monitoring and control of industrial processes.</p>
      </div>
      <div class="service-card p-8 rounded-lg text-center">
        <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-tools"></i></div>
        <h3 class="text-xl font-semibold mb-4">Panel Installation & Commissioning</h3>
        <p class="text-gray-300">Professional installation, commissioning, and testing of control panels and automation systems on-site.</p>
      </div>
      <div class="service-card p-8 rounded-lg text-center">
        <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-wrench"></i></div>
        <h3 class="text-xl font-semibold mb-4">Maintenance & Support</h3>
        <p class="text-gray-300">Preventive maintenance, troubleshooting, and 24/7 technical support for all control panel and automation systems.</p>
      </div>
      <div class="service-card p-8 rounded-lg text-center">
        <div class="text-blue-400 text-4xl mb-4"><i class="fas fa-shield-alt"></i></div>
        <h3 class="text-xl font-semibold mb-4">Safety & Compliance Solutions</h3>
        <p class="text-gray-300">Safety control panels, emergency stop systems, and compliance with international safety standards (ISO, IEC, etc).</p>
      </div>
    </div>
  </div>
</section>

<!-- PLC & HMI Section -->
<section class="py-20 px-6 gradient-bg fade-section">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div class="order-1">
      <h2 class="text-3xl font-bold mb-4 text-blue-300">PLC & HMI Programming for Operational Performance</h2>
      <div class="w-20 h-1 bg-blue-500 mb-6"></div>
      <p class="text-lg text-gray-300 mb-4 text-justify">We engineer PLC logic and HMI screens that mirror your real process — fast to learn, easy to operate, and resilient in production. Operators see only what matters, alarms are prioritized, and recovery steps are clear.</p>
      <p class="text-gray-300 mb-4 text-justify">Under the hood, we use modular architectures (state machines, FB/FC, consistent tag strategy) with standardized alarms/events and diagnostics. This keeps troubleshooting straightforward and changes safe to deploy.</p>
      <p class="text-gray-300 mb-6 text-justify">Deliverables include version control, documentation, and scalable layouts, so your system stays maintainable as your plant grows.</p>
      <h3 class="text-xl font-semibold text-blue-300 mb-3">Supported Platforms</h3>
      <div class="platform-badges flex flex-wrap items-center gap-3 mb-6">
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 text-blue-200 border border-blue-400/30" data-platform="Siemens">
          <i class="fas fa-microchip text-blue-300"></i>
          Siemens
        </span>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 text-blue-200 border border-blue-400/30" data-platform="Mitsubishi">
          <i class="fas fa-microchip text-blue-300"></i>
          Mitsubishi
        </span>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 text-blue-200 border border-blue-400/30" data-platform="Omron">
          <i class="fas fa-microchip text-blue-300"></i>
          Omron
        </span>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 text-blue-200 border border-blue-400/30" data-platform="Siemens">
          <i class="fas fa-microchip text-blue-300"></i>
          Allen Bradley
        </span>
      </div>
    </div>
    <div class="order-2">
      <img src="{{ asset('img/img_asset/control_panel4.jpg') }}" alt="Control panel and HMI" class="w-full h-80 object-cover rounded-lg shadow-2xl mb-8 md:mb-0 transition-transform duration-300 hover:scale-110 cursor-pointer">
    </div>
  </div>
</section>

<!-- SCADA Section -->
<section class="py-20 px-6 bg-gray-900 fade-section">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div class="order-2 md:order-2">
      <h2 class="text-3xl font-bold mb-4 text-blue-300">SCADA & Remote Access
      </h2>
      <div class="w-20 h-1 bg-blue-500 mb-6"></div>
      <p class="text-lg text-gray-300 mb-4 text-justify">Design, development, and deployment of SCADA for real‑time monitoring, centralized control, and secure remote access — engineered to fit your process and infrastructure.</p>
      <p class="text-gray-300 mb-4 text-justify">We integrate SCADA with PLCs and HMIs to create a seamless data path from field to dashboard, with role‑based access and hardened industrial connectivity.</p>
      <h3 class="text-xl font-semibold text-blue-300 mb-3">Key Features</h3>
      <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2 text-justify">
        <li>SCADA & Remote Access (secure web/VPN clients, audit‑ready). Modular, scalable SCADA architecture. Industrial‑grade cybersecurity (accounts, encryption, RBAC). Reliable remote access with buffering/resync on link drops</li>
      </ul>
      <p class="text-gray-300 mb-2 text-justify">Remote access is enabled via HTTPS/VPN with role‑based permissions and optional MFA. Access is logged, and data continuity is preserved with store‑and‑forward where supported.</p>
    </div>
    <div class="order-1 md:order-1">
      <img src="{{ asset('img/img_asset/control_panel4.jpg') }}" alt="SCADA System" class="w-full h-80 object-cover rounded-lg shadow-2xl mb-8 md:mb-0 transition-transform duration-300 hover:scale-110 cursor-pointer">
    </div>
  </div>
</section>

<!-- Control Panels Section -->
<section class="py-20 px-6 gradient-bg fade-section">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div class="order-1">
      <h2 class="text-3xl font-bold mb-4 text-blue-300">Retrofit & Upgrade</h2>
      <div class="w-20 h-1 bg-blue-500 mb-6"></div>
      <p class="text-lg text-gray-300 mb-4 text-justify">We modernize legacy panels and control systems with current‑generation hardware and software — improving reliability, safety, and maintainability without disrupting production.</p>
      <ul class="list-disc list-inside text-gray-300 mb-6 space-y-2 text-justify">
        <li>Controller migrations (obsolete PLCs to current platforms), HMI refresh. Rewiring, labeling, and documentation clean‑up for serviceability. Safety upgrades, component re‑selection, and thermal/cable re‑sizing</li>
      </ul>
      <h3 class="text-xl font-semibold text-blue-300 mb-3">System Integration & Commissioning</h3>
      <p class="text-gray-300 mb-4 text-justify">From electrical design to field I/O mapping, we integrate systems across all layers — PLC, HMI/SCADA, drives, and networks — and stay through FAT/SAT to handover.</p>
      <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2 text-justify">
        <li>Detailed drawings, panel layouts, and bill of materials. End‑to‑end I/O checks, logic verification, and interlock testing. On‑site commissioning, training, and final documentation</li>
      </ul>
    </div>
    <div class="order-2">
      <img src="{{ asset('img/img_asset/control_panel4.jpg') }}" alt="Control Panel" class="w-full h-80 object-cover rounded-lg shadow-2xl mb-8 md:mb-0 transition-transform duration-300 hover:scale-110 cursor-pointer">
    </div>
  </div>
</section>

<!-- Testing & Quality Assurance Section (below Retrofit & Upgrade) -->
<section class="py-20 px-6 bg-gray-900 fade-section relative">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-20 left-10 w-20 h-20 bg-blue-500 rounded-full blur-xl animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-400 rounded-full blur-xl animate-pulse delay-1000"></div>
  </div>

  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center relative z-10">
    <div class="order-1 md:order-1">
      <img src="{{ asset('img/img_asset/control_panel4.jpg') }}" alt="Testing & Quality Assurance" class="w-full h-80 object-cover rounded-lg shadow-2xl mb-8 md:mb-0 transition-transform duration-300 hover:scale-110 cursor-pointer">
    </div>
    <div class="order-2 md:order-2">
      <h2 class="text-3xl font-bold mb-4 text-blue-300">Testing & Quality Assurance</h2>
      <div class="w-20 h-1 bg-blue-500 mb-6"></div>
      <p class="text-lg text-gray-300 mb-4 text-justify">Every project undergoes rigorous verification so your system is safe, reliable, and ready for operation at handover.</p>
      <h3 class="text-xl font-semibold text-blue-300 mb-3">System Integration & Commissioning</h3>
      <p class="text-gray-300 mb-4 text-justify">From electrical design to field I/O mapping, we integrate systems across all layers — PLC, HMI/SCADA, drives, and networks — and stay through FAT/SAT to handover.</p>
      <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2 text-justify">
        <li>Detailed drawings, panel layouts, and bill of materials. End‑to‑end I/O checks, logic verification, and interlock testing. On‑site commissioning, training, and final documentation</li>
      </ul>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Automate Your Industry?</h2>
    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Contact us to discuss your automation, PLC, SCADA, or control panel needs. Our experts are ready to help you achieve operational excellence.</p>
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