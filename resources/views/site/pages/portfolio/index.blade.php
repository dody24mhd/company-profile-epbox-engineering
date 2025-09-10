@extends('site.layouts.app')
@section('title','Projects & Portfolio | Epbox Engineering')
@section('content')
<section class="pt-32 pb-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10 text-center">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">Our <span class="text-blue-300">Projects</span> & Portfolio</h1>
    <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-6"></div>
    <p class="text-xl text-gray-300 max-w-3xl mx-auto">Showcasing real case studies and project gallery that demonstrate our expertise in industrial automation, control panel solutions, and innovative engineering across diverse industries worldwide.</p>
  </div>
</section>

<section class="py-16 px-6 bg-[#0A1128] fade-section">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="text-center">
        <div class="stats-counter" data-target="150">0</div>
        <p class="text-gray-300 font-medium">Projects Completed</p>
      </div>
      <div class="text-center">
        <div class="stats-counter" data-target="25">0</div>
        <p class="text-gray-300 font-medium">Countries Served</p>
      </div>
      <div class="text-center">
        <div class="stats-counter" data-target="98">0</div>
        <p class="text-gray-300 font-medium">Client Satisfaction %</p>
      </div>
      <div class="text-center">
        <div class="stats-counter" data-target="15">0</div>
        <p class="text-gray-300 font-medium">Industries Covered</p>
      </div>
    </div>
  </div>
</section>

<section class="py-20 px-6 bg-[#0A1128] relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300">Featured Case Studies</h2>
      <div class="w-20 h-1 bg-blue-500 mx-auto"></div>
      <p class="text-gray-300 mt-6 max-w-2xl mx-auto">Real-world projects that showcase our expertise in industrial automation and control panel solutions</p>
    </div>
    <div class="grid lg:grid-cols-2 gap-12">
      <div class="case-study-card p-8 rounded-lg">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4"><i class="fas fa-industry text-2xl"></i></div>
          <div>
            <h3 class="text-2xl font-bold text-blue-300">Automotive Manufacturing Plant</h3>
            <p class="text-gray-400">Toyota Manufacturing Indonesia</p>
          </div>
        </div>
        <div class="mb-6"><img src="{{ asset('img/img_asset/control panel.jpg') }}" alt="Automotive Manufacturing Control Panel" class="w-full h-48 object-cover rounded-lg"></div>
        <div class="mb-6">
          <h4 class="text-lg font-semibold mb-3">Project Overview</h4>
          <p class="text-gray-300 mb-4">Complete automation system for Toyota's new manufacturing facility in Indonesia, including production line control, quality monitoring, and safety systems integration.</p>
          <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
              <p class="text-blue-400 font-semibold">Timeline</p>
              <p class="text-gray-300">8 months</p>
            </div>
            <div>
              <p class="text-blue-400 font-semibold">Team Size</p>
              <p class="text-gray-300">12 engineers</p>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <h4 class="text-lg font-semibold mb-3">Technologies Used</h4>
          <div class="flex flex-wrap gap-2"><span class="tech-tag px-3 py-1 rounded-full text-sm">Siemens PLC</span><span class="tech-tag px-3 py-1 rounded-full text-sm">SCADA</span><span class="tech-tag px-3 py-1 rounded-full text-sm">HMI</span><span class="tech-tag px-3 py-1 rounded-full text-sm">IoT</span></div>
        </div>
        <div class="mb-6">
          <h4 class="text-lg font-semibold mb-3">Results Achieved</h4>
          <ul class="text-gray-300 space-y-2">
            <li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>40% increase in production efficiency</span></li>
            <li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>99.8% system uptime achieved</span></li>
            <li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Zero safety incidents in 2 years</span></li>
          </ul>
        </div>
      </div>
      <div class="case-study-card p-8 rounded-lg">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4"><i class="fas fa-bolt text-2xl"></i></div>
          <div>
            <h3 class="text-2xl font-bold text-blue-300">Power Generation Control</h3>
            <p class="text-gray-400">PLN Power Plant</p>
          </div>
        </div>
        <div class="mb-6"><img src="{{ asset('img/img_asset/power2.jpg') }}" alt="Power Generation Control System" class="w-full h-48 object-cover rounded-lg"></div>
        <div class="mb-6">
          <h4 class="text-lg font-semibold mb-3">Project Overview</h4>
          <p class="text-gray-300 mb-4">Advanced control system for PLN's thermal power plant, featuring turbine control, grid synchronization, and emergency shutdown systems with real-time monitoring.</p>
          <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
              <p class="text-blue-400 font-semibold">Timeline</p>
              <p class="text-gray-300">12 months</p>
            </div>
            <div>
              <p class="text-blue-400 font-semibold">Team Size</p>
              <p class="text-gray-300">8 engineers</p>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <h4 class="text-lg font-semibold mb-3">Technologies Used</h4>
          <div class="flex flex-wrap gap-2"><span class="tech-tag px-3 py-1 rounded-full text-sm">ABB DCS</span><span class="tech-tag px-3 py-1 rounded-full text-sm">Turbine Control</span><span class="tech-tag px-3 py-1 rounded-full text-sm">Grid Sync</span><span class="tech-tag px-3 py-1 rounded-full text-sm">Safety Systems</span></div>
        </div>
        <div class="mb-6">
          <h4 class="text-lg font-semibold mb-3">Results Achieved</h4>
          <ul class="text-gray-300 space-y-2">
            <li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>500MW capacity managed</span></li>
            <li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>99.9% grid stability</span></li>
            <li class="flex items-start"><i class="fas fa-check-circle text-blue-400 mt-1 mr-3"></i><span>Reduced downtime by 60%</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-20 px-6 gradient-bg relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Project Gallery</h2>
      <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
      <p class="text-gray-300 max-w-2xl mx-auto mb-8">Explore our diverse portfolio of industrial automation and control panel projects</p>
      <div class="flex flex-wrap justify-center gap-4 mb-12"><button class="filter-btn active px-6 py-2 rounded-lg text-sm font-medium" data-filter="all">All Projects</button><button class="filter-btn px-6 py-2 rounded-lg text-sm font-medium" data-filter="manufacturing">Manufacturing</button><button class="filter-btn px-6 py-2 rounded-lg text-sm font-medium" data-filter="power">Power Generation</button><button class="filter-btn px-6 py-2 rounded-lg text-sm font-medium" data-filter="oil-gas">Oil & Gas</button><button class="filter-btn px-6 py-2 rounded-lg text-sm font-medium" data-filter="water">Water Treatment</button></div>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="project-gallery">
      <div class="project-card rounded-lg overflow-hidden" data-category="manufacturing">
        <div class="relative overflow-hidden"><img src="{{ asset('img/img_asset/control panel4.jpg') }}" alt="Manufacturing Control Panel" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          <div class="absolute bottom-4 left-4"><span class="bg-blue-600 px-3 py-1 rounded-full text-xs">Manufacturing</span></div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Automotive Assembly Line</h3>
          <p class="text-gray-300 text-sm mb-4">Complete automation system for automotive assembly with robotic integration and quality control.</p>
          <div class="flex flex-wrap gap-2 mb-4"><span class="tech-tag px-2 py-1 rounded text-xs">PLC</span><span class="tech-tag px-2 py-1 rounded text-xs">Robotics</span><span class="tech-tag px-2 py-1 rounded text-xs">SCADA</span></div>
          <div class="flex justify-between items-center"><span class="text-blue-400 text-sm">Completed 2023</span></div>
        </div>
      </div>
      <div class="project-card rounded-lg overflow-hidden" data-category="power">
        <div class="relative overflow-hidden"><img src="{{ asset('img/img_asset/power2.jpg') }}" alt="Power Plant Control" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          <div class="absolute bottom-4 left-4"><span class="bg-blue-600 px-3 py-1 rounded-full text-xs">Power Generation</span></div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Thermal Power Plant</h3>
          <p class="text-gray-300 text-sm mb-4">Advanced control system for 500MW thermal power plant with turbine and grid management.</p>
          <div class="flex flex-wrap gap-2 mb-4"><span class="tech-tag px-2 py-1 rounded text-xs">DCS</span><span class="tech-tag px-2 py-1 rounded text-xs">Turbine Control</span><span class="tech-tag px-2 py-1 rounded text-xs">Grid Sync</span></div>
          <div class="flex justify-between items-center"><span class="text-blue-400 text-sm">Completed 2023</span></div>
        </div>
      </div>
      <div class="project-card rounded-lg overflow-hidden" data-category="oil-gas">
        <div class="relative overflow-hidden"><img src="{{ asset('img/img_asset/control panel.jpg') }}" alt="Oil & Gas Control" class="w-full h-48 object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          <div class="absolute bottom-4 left-4"><span class="bg-blue-600 px-3 py-1 rounded-full text-xs">Oil & Gas</span></div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Refinery Control System</h3>
          <p class="text-gray-300 text-sm mb-4">Comprehensive control system for oil refinery with safety shutdown and monitoring.</p>
          <div class="flex flex-wrap gap-2 mb-4"><span class="tech-tag px-2 py-1 rounded text-xs">SIS</span><span class="tech-tag px-2 py-1 rounded text-xs">F&G</span><span class="tech-tag px-2 py-1 rounded text-xs">DCS</span></div>
          <div class="flex justify-between items-center"><span class="text-blue-400 text-sm">Completed 2022</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-20 px-6 bg-[#0A1128] fade-section">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-300">Client Testimonials</h2>
      <div class="w-20 h-1 bg-blue-500 mx-auto"></div>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-gray-800 p-6 rounded-lg">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4"><i class="fas fa-user text-white"></i></div>
          <div>
            <h4 class="font-semibold">John Smith</h4>
            <p class="text-gray-400 text-sm">Plant Manager, Toyota Indonesia</p>
          </div>
        </div>
        <p class="text-gray-300 italic">"Epbox Engineering delivered an exceptional automation system that exceeded our expectations. Their expertise in automotive manufacturing control systems is unmatched."</p>
      </div>
      <div class="bg-gray-800 p-6 rounded-lg">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-600 rounded-full flex itemsCenter justify-center mr-4"><i class="fas fa-user text-white"></i></div>
          <div>
            <h4 class="font-semibold">Sarah Johnson</h4>
            <p class="text-gray-400 text-sm">Operations Director, PLN</p>
          </div>
        </div>
        <p class="text-gray-300 italic">"The power plant control system from Epbox Engineering has significantly improved our operational efficiency and grid stability. Highly recommended!"</p>
      </div>
      <div class="bg-gray-800 p-6 rounded-lg">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4"><i class="fas fa-user text-white"></i></div>
          <div>
            <h4 class="font-semibold">Michael Chen</h4>
            <p class="text-gray-400 text-sm">CEO, PetroChem Industries</p>
          </div>
        </div>
        <p class="text-gray-300 italic">"Outstanding work on our refinery control system. The safety features and monitoring capabilities have given us complete peace of mind."</p>
      </div>
    </div>
  </div>
</section>

<section class="py-20 px-6 cta-animated-gradient relative overflow-hidden fade-section">
  <div class="max-w-7xl mx-auto relative z-10 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Work With Us?</h2>
    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Let's discuss your control panel requirements and how we can help bring your industrial automation vision to life.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('site.contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Get Free Quote</a>
      <a href="{{ route('site.portfolio.index') }}" class="bg-transparent border-2 border-blue-600 hover:bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold transition duration-300 transform hover:scale-105">View Our Projects</a>
    </div>
  </div>
</section>
@endsection