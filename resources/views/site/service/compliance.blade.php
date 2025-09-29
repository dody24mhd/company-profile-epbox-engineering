@extends('site.layouts.app')
@section('title', 'Compliance & Certifications | Epbox Engineering')
@section('content')
<section class="pt-32 pb-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex items-center gap-2 mb-4">
          <a href="{{ route('site.services') }}#offer-services" class="text-blue-300 hover:text-blue-400 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>Back to Services
          </a>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Compliance & Certifications</h1>
        <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">All Explosion Proof Panels are designed and fabricated using Aluminum or SS316 enclosures.</p>
      </div>
      <div class="relative">
        <img src="{{ asset('img/epbox/gambar12.png') }}" alt="Compliance & Certifications" class="w-full h-80 object-cover rounded-lg shadow-2xl">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
      </div>
    </div>
  </div>
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none" style="z-index:0; opacity:0.5;"></canvas>
</section>

<section class="py-20 px-6 bg-[#0A1128] fade-section">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-3 gap-12">
      <div class="lg:col-span-2">
        <h2 class="text-3xl font-bold mb-6 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">OUR OFFERINGS</h2>
        <div class="prose prose-invert max-w-none">
          <p class="text-gray-300 mb-6" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">We ensure materials and designs meet the strict requirements for explosion-proof applications and corrosive environments.</p>
        </div>
        <div class="mt-8">
          <div class="space-y-4">
            <details class="group bg-gray-800/30 rounded-lg overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-gray-700/30 transition-colors">
                <h4 class="text-xl font-semibold text-white" style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Aluminum and SS316 Enclosure Construction</h4>
                <i class="fas fa-chevron-down text-blue-300 group-open:rotate-180 transition-transform"></i>
              </summary>
              <div class="px-6 pb-6">
                <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">High-quality materials ensuring durability and compliance with international standards for explosion-proof applications.</p>
              </div>
            </details>
            
            <details class="group bg-gray-800/30 rounded-lg overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-gray-700/30 transition-colors">
                <h4 class="text-xl font-semibold text-white" style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Ingress Protection and Corrosion Resistance</h4>
                <i class="fas fa-chevron-down text-blue-300 group-open:rotate-180 transition-transform"></i>
              </summary>
              <div class="px-6 pb-6">
                <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Advanced protection against environmental factors ensuring long-term reliability in harsh industrial conditions.</p>
              </div>
            </details>
            
            <details class="group bg-gray-800/30 rounded-lg overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-gray-700/30 transition-colors">
                <h4 class="text-xl font-semibold text-white" style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Third-Party Inspection Readiness</h4>
                <i class="fas fa-chevron-down text-blue-300 group-open:rotate-180 transition-transform"></i>
              </summary>
              <div class="px-6 pb-6">
                <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Complete documentation and certification support for regulatory compliance and quality assurance.</p>
              </div>
            </details>
          </div>
        </div>
      </div>
      <div class="space-y-8">
        <div class="bg-gray-800/50 backdrop-blur-sm rounded-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-blue-300" style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Service Information</h3>
          <div class="space-y-4">
            <div class="border-b border-gray-600 pb-3">
              <span class="text-gray-400 text-sm" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Category</span>
              <p class="text-white text-lg mt-1" style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Compliance</p>
            </div>
            <div>
              <span class="text-gray-400 text-sm" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Materials</span>
              <div class="flex flex-wrap gap-2 mt-2">
                <span class="bg-blue-600/20 text-blue-300 px-3 py-1 rounded-full text-sm" style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Aluminum</span>
                <span class="bg-blue-600/20 text-blue-300 px-3 py-1 rounded-full text-sm" style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">SS316</span>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg p-6 text-center">
          <h3 class="text-xl font-bold mb-3 text-white" style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Need this Service?</h3>
          <p class="text-blue-100 mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Talk to our engineers for a tailored solution</p>
          <a href="{{ route('site.contact') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors" style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Get Quote</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


