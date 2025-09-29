@extends('site.layouts.app')
@section('title', 'Safety & Compliance by Design | Epbox Engineering')
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
        <h1 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Safety & Compliance Design</h1>
        <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Safety is a core principle at EPBOX Engineering. Our systems are designed with safety in mind, ensuring compliance with international standards for electrical and environmental protection.</p>
      </div>
      <div class="relative">
        <img src="{{ asset('img/epbox/gambar5.png') }}" alt="Automation Integration" class="w-full h-80 object-cover rounded-lg shadow-2xl">
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
          <div class="mt-1">
          <div class="bg-blue-900/20 rounded-lg p-6">
            <ul class="list-disc pl-6 space-y-3">
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Compliance with International Standards</span>
                <span class="text-gray-300">: We follow IEC standards for electrical designs and NFPA (NEC 70) for safe electrical installations, ensuring your systems are built to the highest standards.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Hazardous Area Compliance</span>
                <span class="text-gray-300">: For environments with explosive hazards, our designs comply with ATEX and IECEx standards, available on request.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Certified Panel Building Methodology (CP5)</span>
                <span class="text-gray-300">: We use CP5 standards to guarantee safety, quality, and traceability in the manufacturing process.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">NEMA & IP Ratings</span>
                <span class="text-gray-300">: Our panels are built with NEMA-rated enclosures to ensure protection against environmental factors like dust, moisture, and physical impact, maintaining integrity in harsh conditions.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Sidebar -->
      <div class="space-y-8">
        <div class="bg-white backdrop-blur-sm rounded-lg p-6">
          <img src="{{ asset('img/epbox/PLC.png') }}" alt="PLC Image" class="plc-img w-full h-auto rounded-lg shadow-lg object-cover">
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


