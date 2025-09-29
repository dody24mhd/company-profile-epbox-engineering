<!-- Navigation -->
<nav class="navbar fixed w-full z-50 py-3 sm:py-4 px-4 sm:px-6" id="navbar">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center flex-shrink-0">
      <a href="{{ route('site.home') }}" class="inline-flex items-center">
        <img src="{{ asset('img/logo2.png') }}" alt="EPBOX ENGINEERING" class="h-10 sm:h-12 w-auto object-contain" loading="lazy">
      </a>
    </div>
    
    <!-- Desktop Menu -->
    <div class="desktop-menu hidden lg:flex space-x-1 xl:space-x-2">
      <a href="{{ route('site.home') }}#home" class="nav-link text-white {{ request()->routeIs('site.home') ? 'active' : '' }}">
        <i class="fas fa-home"></i><span class="nav-label">Home</span>
      </a>
      <a href="{{ route('site.about') }}" class="nav-link text-white {{ request()->routeIs('site.about') ? 'active' : '' }}">
        <i class="fas fa-users"></i><span class="nav-label">About Us</span>
      </a>
      <a href="{{ route('site.services') }}" class="nav-link text-white {{ request()->routeIs('site.services') || request()->routeIs('site.service.*') ? 'active' : '' }}">
        <i class="fas fa-cogs"></i><span class="nav-label">Services</span>
      </a>
      <a href="{{ route('site.industries') }}" class="nav-link text-white {{ request()->routeIs('site.industries') ? 'active' : '' }}">
        <i class="fas fa-industry"></i><span class="nav-label">Industries</span>
      </a>
      <a href="{{ route('site.portfolio.index') }}" class="nav-link text-white {{ request()->routeIs('site.portfolio.*') ? 'active' : '' }}">
        <i class="fas fa-project-diagram"></i><span class="nav-label">Projects</span>
      </a>
      <a href="{{ route('site.blog') }}" class="nav-link text-white {{ request()->routeIs('site.blog*') ? 'active' : '' }}">
        <i class="fas fa-newspaper"></i><span class="nav-label">Blog</span>
      </a>
      <div class="relative" onmouseenter="showNavDownloadsMenu()" onmouseleave="hideNavDownloadsMenu()">
        <button class="nav-link text-white" id="navDownloadsBtn">
          <i class="fas fa-download"></i><span class="nav-label">Downloads</span> <i class="fas fa-caret-down ml-1"></i>
        </button>
        <div id="navDownloadsMenu"
          class="hidden absolute right-0 mt-2 w-60 origin-top-right rounded-lg bg-gray-900/95 border border-white/10 shadow-lg z-50">
          <a href="docs/company-profile.pdf" download
            class="flex items-center gap-2 px-4 py-2 text-sm text-gray-200 hover:bg-white/10">
            <i class="fas fa-file-pdf text-blue-400"></i>E-Catalog
          </a>
        </div>
      </div>
      <a href="{{ route('site.contact') }}" class="nav-link text-white">
        <i class="fas fa-envelope"></i><span class="nav-label">Contact</span>
      </a>
    </div>
    
    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn lg:hidden text-white text-2xl" id="menu-toggle">
      <i class="fas fa-bars"></i>
    </button>
  </div>
  
  <!-- Mobile Menu -->
  <div class="mobile-menu lg:hidden hidden" id="mobile-menu">
    <div class="mobile-menu-content">
      <a href="{{ route('site.home') }}#home" class="mobile-nav-link {{ request()->routeIs('site.home') ? 'active' : '' }}">
        <i class="fas fa-home"></i>Home
      </a>
      <a href="{{ route('site.about') }}" class="mobile-nav-link {{ request()->routeIs('site.about') ? 'active' : '' }}">
        <i class="fas fa-users"></i>About Us
      </a>
      <a href="{{ route('site.services') }}" class="mobile-nav-link {{ request()->routeIs('site.services') || request()->routeIs('site.service.*') ? 'active' : '' }}">
        <i class="fas fa-cogs"></i>Services
      </a>
      <a href="{{ route('site.industries') }}" class="mobile-nav-link {{ request()->routeIs('site.industries') ? 'active' : '' }}">
        <i class="fas fa-industry"></i>Industries
      </a>
      <a href="{{ route('site.portfolio.index') }}" class="mobile-nav-link {{ request()->routeIs('site.portfolio.*') ? 'active' : '' }}">
        <i class="fas fa-project-diagram"></i>Projects
      </a>
      <a href="{{ route('site.blog') }}" class="mobile-nav-link {{ request()->routeIs('site.blog*') ? 'active' : '' }}">
        <i class="fas fa-newspaper"></i>Blog
      </a>
      <a href="#downloads" class="mobile-nav-link">
        <i class="fas fa-download"></i>Downloads
      </a>
      <a href="{{ route('site.contact') }}" class="mobile-nav-link {{ request()->routeIs('site.contact') ? 'active' : '' }}">
        <i class="fas fa-envelope"></i>Contact
      </a>
    </div>
  </div>
</nav>