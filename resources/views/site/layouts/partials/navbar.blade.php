<!-- Navigation -->
<nav class="navbar fixed w-full z-50 py-4 px-6" id="navbar">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <div class="flex items-center">
      <a href="{{ route('site.home') }}" class="inline-flex items-center h-10 overflow-hidden">
        <img src="{{ asset('img/logo2.png') }}" alt="EPBOX ENGINEERING" class="h-12 w-auto object-cover object-center" loading="lazy">
      </a>
    </div>
    <div class="hidden md:flex space-x-2">
      <a href="{{ route('site.home') }}#home" class="nav-link text-white">
        <i class="fas fa-home"></i>Home
      </a>
      <a href="{{ route('site.about') }}" class="nav-link text-white">
        <i class="fas fa-users"></i>About Us
      </a>
      <a href="{{ route('site.services') }}" class="nav-link text-white">
        <i class="fas fa-cogs"></i>Services
      </a>
      <a href="{{ route('site.industries') }}" class="nav-link text-white">
        <i class="fas fa-industry"></i>Industries
      </a>
      <a href="{{ route('site.portfolio.index') }}" class="nav-link text-white">
        <i class="fas fa-project-diagram"></i>Projects
      </a>
      <a href="{{ route('site.blog') }}" class="nav-link text-white">
        <i class="fas fa-newspaper"></i>Blog
      </a>
      <div class="relative" onmouseenter="showNavDownloadsMenu()" onmouseleave="hideNavDownloadsMenu()">
        <button class="nav-link text-white" id="navDownloadsBtn">
          <i class="fas fa-download"></i>Downloads <i class="fas fa-caret-down ml-1"></i>
        </button>
        <div id="navDownloadsMenu"
          class="hidden absolute right-0 mt-2 w-60 origin-top-right rounded-lg bg-gray-900/95 border border-white/10 shadow-lg z-50">
          <a href="docs/company-profile.pdf" download
            class="flex items-center gap-2 px-4 py-2 text-sm text-gray-200 hover:bg-white/10">
            <i class="fas fa-file-pdf text-blue-400"></i>Company Profile
          </a>
          <a href="docs/service-brochure.pdf" download
            class="flex items-center gap-2 px-4 py-2 text-sm text-gray-200 hover:bg-white/10">
            <i class="fas fa-file-alt text-blue-400"></i>Service Brochure
          </a>
          <a href="docs/product-catalog.pdf" download
            class="flex items-center gap-2 px-4 py-2 text-sm text-gray-200 hover:bg-white/10">
            <i class="fas fa-book text-blue-400"></i>Product Catalog
          </a>
        </div>
      </div>
      <a href="{{ route('site.contact') }}" class="nav-link text-white">
        <i class="fas fa-envelope"></i>Contact
      </a>
    </div>
    <button class="md:hidden mobile-menu-btn text-white text-2xl" id="menu-toggle">
      <i class="fas fa-bars"></i>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden hidden mobile-menu" id="mobile-menu">
    <a href="{{ route('site.home') }}#home" class="block text-white">
      <i class="fas fa-home mr-3"></i>Home
    </a>
    <a href="{{ route('site.about') }}" class="block text-white">
      <i class="fas fa-users mr-3"></i>About Us
    </a>
    <a href="{{ route('site.services') }}" class="block text-white">
      <i class="fas fa-cogs mr-3"></i>Services
    </a>
    <a href="{{ route('site.industries') }}" class="block text-white">
      <i class="fas fa-industry mr-3"></i>Industries
    </a>
    <a href="{{ route('site.portfolio.index') }}" class="block text-white">
      <i class="fas fa-project-diagram mr-3"></i>Projects
    </a>
    <a href="{{ route('site.blog') }}" class="block text-white">
      <i class="fas fa-newspaper mr-3"></i>Blog
    </a>
    <a href="#downloads" class="block text-white">
      <i class="fas fa-download mr-3"></i>Downloads
    </a>
    <a href="{{ route('site.contact') }}" class="block text-white">
      <i class="fas fa-envelope mr-3"></i>Contact
    </a>
  </div>
</nav>