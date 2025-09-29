@extends('site.layouts.app')
@section('title', 'Explosion Proof Panels | Epbox Engineering')
@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="flex items-center gap-2 mb-4">
          <a href="{{ route('site.services') }}" class="text-blue-300 hover:text-blue-400 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>Back to Services
          </a>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-6"
          style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Explosion Proof Panels</h1>
        <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
          Offers explosion-proof panels certified for hazardous environments, meeting ATEX / IECEx, IEC, NR10, and CP5 standards. Available in Ex-d, Ex-e, and Ex-p types, they ensure reliable operation and protection for MCC, PLC control systems, and process monitoring panels in demanding conditions.</p>
      </div>
      <div class="relative flex justify-center">
        <img src="{{ asset('img/epbox/Picture2.png') }}" alt="PLC & HMI Programming"
          class="w-80 h-50 object-cover rounded-lg shadow-2xl">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
      </div>
    </div>
  </div>
  <canvas class="x-canvas-net absolute inset-0 w-full h-full pointer-events-none"
    style="z-index:0; opacity:0.5;"></canvas>
</section>

<!-- Product Details -->
<section class="py-20 px-6 bg-[#0A1128] fade-section">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-3 gap-12">
      <!-- Main Content -->
      <div class="lg:col-span-2">
        <h2 class="text-3xl font-bold mb-2 text-blue-300"
          style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Key Features :</h2>
        <div class="mt-1">
          <div class="bg-blue-900/20 rounded-lg p-6">
            <ul class="list-disc pl-6 space-y-3">
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Certified Compliance</span>
                <span class="text-gray-300">: Engineered to meet and exceed key international standards,
                  including ATEX, IECEx, IEC 61439, NR10, and CP5.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Protection</span>
                <span class="text-gray-300">: Features enclosures rated up to IP66, providing superior protection against dust and water ingress in harsh industrial and offshore environments</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Flexible Configurations</span>
                <span class="text-gray-300">: Fully customizable for a wide range of applications, including
                  Motor Control Centres (MCCs), PLC systems, and specialized process control units.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Explosion Proof Types</span>
                <span class="text-gray-300">: Ex-d (Flameproof), Ex-e (Increased Safety), Ex-p (Pressurized).</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Engineered for Reliability</span>
                <span class="text-gray-300">: Designed for safe, long-term performance in demanding
                  sectors such as oil & gas, petrochemical, and critical infrastructure.</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Technical Specifications -->
        <div class="mt-4">
          <h3 class="text-2xl font-bold mb-4 text-blue-300"
            style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Project Technical
            Specifications :</h3>
          <div class="bg-blue-900/20 rounded-lg p-6 overflow-x-auto">
            <table class="min-w-full table-fixed text-left border-collapse">
              <tbody>
                <tr>
                   <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                     style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Protection Types</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Ex-d, Ex-e, Ex-p</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Operating Voltage</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">110 – 690 V AC / 24 V DC</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Frequency</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">50 / 60 Hz</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Enclosure Protection</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Protection from IP42 to IP66 and beyond</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Material</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Aluminum or Stainless Steel 316</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Temperature Class</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">T4 – T6</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Standards Compliance</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">IECEx, ATEX or compatible certification</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="space-y-8">
        <div class="bg-white backdrop-blur-sm rounded-lg p-6">
          <img src="{{ asset('img/epbox/EXP.png') }}" alt="PLC Image" class="plc-img w-full h-auto rounded-lg shadow-lg object-cover">
        </div>
        <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg p-6 text-center">
          <h3 class="text-xl font-bold mb-3 text-white"
            style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Interested in this
            Project?</h3>
          <p class="text-blue-100 mb-4"
            style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Contact us for more
            information</p>
          <a href="{{ route('site.contact') }}"
            class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors"
            style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Get Quote</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
