@extends('site.layouts.app')
@section('title', 'System Integration Solutions | Epbox Engineering')
@section('content')

<!-- Service Hero -->
<section class="pt-32 pb-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex items-center gap-2 mb-4">
          <a href="{{ route('site.services') }}#offer-services" class="text-blue-300 hover:text-blue-400 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>Back to Services
          </a>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">System Integration</h1>
        <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Our systems ensure every layer of your operations—from field devices to enterprise platforms—works seamlessly together, creating a fully integrated ecosystem that boosts efficiency, minimizes downtime, and improves decision-making.</p>
      </div>
      <div class="relative">
        <img src="{{ asset('img/epbox/gambar31.png') }}" alt="Automation Integration" class="w-full h-80 object-cover rounded-lg shadow-2xl">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
      </div>
    </div>
  </div>
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
</section>

<!-- Services Details -->
<section class="py-20 px-6 bg-[#0A1128] fade-section">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-3 gap-12">
      <!-- Main Content -->
      <div class="lg:col-span-2">
        <h2 class="text-3xl font-bold mb-2 text-blue-300"
          style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">System Integration Solutions</h2>
        <div class="mt-1">
          <div class="bg-blue-900/20 rounded-lg p-6">
            <ul class="list-disc pl-6 space-y-3">
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Field-Level Integration</span>
                <span class="text-gray-300">: Connecting sensors, actuators, drives, and instrumentation via industry-standard protocols like Modbus, Profibus, Profinet, and EtherNet/IP, enabling real-time data collection and monitoring.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Control-Level Integration</span>
                <span class="text-gray-300">: Full integration of Motor Control Centers (MCCs) and Local Control Panels (LCPs) with multi-brand PLCs, ensuring smooth communication and control of all devices.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Redundancy and Fail-Safes</span>
                <span class="text-gray-300">: For critical applications, we implement redundancy and fail-safe mechanisms, ensuring continuous operation even in the event of hardware or software failure.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Supervisory-Level Integration</span>
                <span class="text-gray-300">: SCADA dashboards provide real-time data, alarms, historian databases, and remote monitoring and control, enabling centralized oversight of operations.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Enterprise & IoT Integration</span>
                <span class="text-gray-300">: Seamlessly integrate data flow from the plant floor to MES/ERP systems, enabling effective resource management. We also ensure Industry 4.0 readiness with cloud connectivity and predictive analytics, along with cybersecure networking protocols like firewalls, VPNs, and encrypted communication for safe data transfer.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Sidebar -->
      <div class="space-y-8">
        <div class="bg-white backdrop-blur-sm rounded-lg p-6">
          <img src="{{ asset('img/epbox/MCC.png') }}" alt="PLC Image" class="plc-img w-full h-auto rounded-lg shadow-lg object-cover">
        </div>
        <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg p-6 text-center">
          <h3 class="text-xl font-bold mb-3 text-white"
            style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Interested in this
            service?</h3>
          <a href="{{ route('site.contact') }}"
            class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors"
            style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Get Quote</a>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection


