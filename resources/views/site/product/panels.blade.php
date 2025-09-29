@extends('site.layouts.app')
@section('title', 'Custom Control Panels | Epbox Engineering')
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
          style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Custom Control Panel</h1>
        <p class="text-gray-300" style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">
          Designing and fabricating smart, durable, and fully customized control panels tailored to your specific operational requirements for industrial automation, process control, or safety monitoring, our panels are engineered to provide optimal performance and reliability.</p>
      </div>
      <div class="relative flex justify-center">
        <img src="{{ asset('img/epbox/Picture6.png') }}" alt="PLC & HMI Programming"
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
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Tailored Design</span>
                <span class="text-gray-300">: Fully customized to meet your specific operational needs and environment.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Smart Integration</span>
                <span class="text-gray-300">: Incorporates advanced technology for real-time monitoring and automation control.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Durable Construction</span>
                <span class="text-gray-300">: Built with high-quality materials for long-lasting reliability in harsh environments.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Compliance with Standards</span>
                <span class="text-gray-300">: Engineered to meet or exceed industry standards for safety and performance.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Flexible Configurations</span>
                <span class="text-gray-300">: Modular design allows for easy scalability and adaptation to future requirements.</span>
              </li>
              <li class="text-white text-base md:text-lg">
                <span class="font-semibold text-gray-200" style="font-family: 'Roboto', sans-serif; letter-spacing: 0.3px;">Intuitive Controls</span>
                <span class="text-gray-300">: User-friendly interfaces for ease of operation and quick response times.</span>
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
