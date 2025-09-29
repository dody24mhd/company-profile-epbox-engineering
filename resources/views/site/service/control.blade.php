@extends('site.layouts.app')
@section('title', 'Control Panel Engineering | Epbox Engineering')
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
        <h1 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Control Panel Engineering</h1>
        <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">We design and manufacture a wide range of Low Voltage control panels, customized to meet operational and environmental requirements. These panels serve as the core components in ensuring the smooth operation and safety of industrial environments.</p>
      </div>
      <div class="relative">
        <img src="{{ asset('img/epbox/gambar33.png') }}" alt="Automation Integration" class="w-full h-80 object-cover rounded-lg shadow-2xl">
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
          style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR EXPERTISE :</h2>
          <div class="prose prose-invert max-w-none">
            <p class="text-gray-300 mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">We bring intelligence and operational efficiency to industrial processes through advanced automation systems that improve real-time decision-making and performance.</p>
          </div>
        <div class="mt-1">
          <div class="bg-blue-900/20 rounded-lg p-6">
            <ul class="list-disc pl-6 space-y-3">
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Power Distribution Panels (LV)</span>
                <span class="text-gray-300">: Essential for efficient power distribution, ensuring optimal energy management.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Local Control Panels (LCPs)</span>
                <span class="text-gray-300">: Tailored for localized control and monitoring of machines or equipment, improving efficiency.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Motor Control Centers (MCCs)</span>
                <span class="text-gray-300">: Provide centralized control and protection for electric motors, enhancing operational reliability.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Explosion-Proof Panels (Ex-d, Ex-e, Ex-p)</span>
                <span class="text-gray-300">: Designed for hazardous environments, preventing potential sparks or heat that could lead to explosions.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Materials</span>
                <span class="text-gray-300">: Enclosures made from Aluminum, Stainless Steel 316, or other custom materials upon request, ensuring durability and resistance to harsh environmental conditions.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Standards</span>
                <span class="text-gray-300">: Built to meet international standards, including IEC, NEMA, ATEX, IECEx, NFPA, and CP5, ensuring compliance with safety and environmental regulations. Explosion-proof and certified options available on request, guaranteeing safety in hazardous environments.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Sidebar -->
      <div class="space-y-8">
        <div class="bg-white backdrop-blur-sm rounded-lg p-6">
          <img src="{{ asset('img/epbox/PWR.png') }}" alt="PLC Image" class="plc-img w-full h-auto rounded-lg shadow-lg object-cover">
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
