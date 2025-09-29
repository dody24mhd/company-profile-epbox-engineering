@extends('site.layouts.app')
@section('title', 'Power Distribution Panel | Epbox Engineering')
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
          style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Power Distribution Panel</h1>
        <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
          Power Distribution Panel (PDP) ensures safe, efficient, and reliable power distribution for industrial plants, offshore facilities, and utilities. Built to meet IEC, CP5, and NR10 standards, it is designed for continuous operation in demanding environments.</p>
      </div>
      <div class="relative flex justify-center">
        <img src="{{ asset('img/epbox/Picture3.png') }}" alt="PLC & HMI Programming"
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
        <div class="prose prose-invert max-w-none">
        </div>
        <div class="mt-1">
          <div class="bg-blue-900/20 rounded-lg p-6">
            <ul class="list-disc pl-6 space-y-3">
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">High-Capacity Busbars</span>
                <span class="text-gray-300">: Rated up to 2000 A, with higher capacity ratings engineered to
                  client specifications.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">High Short Circuit Rating</span>
                <span class="text-gray-300">: Engineered to safely withstand short circuit currents up to 100
                  kA.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Multi-Protocol Communication</span>
                <span class="text-gray-300">: Fluent in major industrial protocols such as Modbus, Profibus, Profinet, Ethernet/IP, and OPC UA.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Robust Enclosure Protection</span>
                <span class="text-gray-300">: Available with enclosure ratings up to IP66 / NEMA 4X,
                  ensuring superior protection in harsh indoor and outdoor environments.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Advanced Protection Devices</span>
                <span class="text-gray-300">: Integrates high-quality MCCBs (Molded Case Circuit
                  Breakers) and ACBs (Air Circuit Breakers), with selective coordination available to ensure
                  system reliability.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Smart Monitoring & Control</span>
                <span class="text-gray-300">: Equipped with digital metering, protective relays, and
                  SCADA-ready communication protocols for seamless system integration.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Future-Ready Design</span>
                <span class="text-gray-300">: Features a modular and scalable architecture, allowing for simple
                  and cost-effective future expansion.</span>
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
                     style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Rated Voltage</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">220V - 690V AC</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Rated Current</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Up to 2000A (customizable)</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Frequency</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">50 / 60 Hz</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Protection</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Protection from IP42 to IP66 and beyond</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Busbar Material</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Copper/Aluminium, IEC standard compliant</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Circuit Breakers</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">MCCB, ACB, MCB (as per design)</td>
                </tr>
                <tr>
                  <th class="w-1/3 px-4 align-top text-white text-lg py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Installation Type</th>
                  <td class="w-2/3 text-white text-lg px-4 py-5 border border-white"
                    style="font-family: 'Roboto', sans-serif; font-weight: 500; letter-spacing: 0.3px;">Floor mounted / Wall mounted</td>
                </tr>
              </tbody>
            </table>
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
            Product?</h3>
          <p class="text-blue-100 mb-4"
            style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Contact us for more
            information and pricing</p>
          <a href="{{ route('site.contact') }}"
            class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors"
            style="font-family: 'Roboto', sans-serif; font-weight: 600; letter-spacing: 0.3px;">Get Quote</a>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection