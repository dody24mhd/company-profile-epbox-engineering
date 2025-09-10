<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion navy-sidebar" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('img/card.png') }}" alt="EPBOX ENGINEERING" class="sidebar-brand-img">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Profile (Admin only via middleware) -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.show') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>

    @if(Auth::user() && (Auth::user()->is_super_admin ?? false))
    <!-- Nav Item - Admins (Super Admin only) -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.admins.index') }}">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Admins</span>
        </a>
    </li>
    @endif

    <!-- Nav Item - Blog -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.blogs.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Blog</span>
        </a>
    </li>

    <!-- Nav Item - Projects -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.projects.index') }}">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Projects</span>
        </a>
    </li>

    <!-- Nav Item - Testimonials -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
            <i class="fas fa-fw fa-comment-alt"></i>
            <span>Testimonials</span>
        </a>
    </li>

    <!-- Nav Item - Contact -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contacts.index') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Contact/RFQ</span>
        </a>
    </li>

    <!-- Nav Item - Audits (Super Admin only) -->
    @can('manage-admins')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.audits.index') }}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Audit Logs</span>
        </a>
    </li>
    @endcan
</ul>