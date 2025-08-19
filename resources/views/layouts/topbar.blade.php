<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Mobile) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" title="Toggle Sidebar">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Sidebar Toggle (Desktop) -->
    <button id="sidebarToggle" class="btn btn-link d-none d-md-inline-block rounded-circle mr-3" title="Toggle Sidebar">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <div class="text-right mr-2 d-none d-lg-inline">
                        <div class="text-gray-600 small font-weight-bold">{{ Auth::user()->name ?? 'Guest' }}</div>
                        @if(Auth::user())
                        <div class="text-xs">
                            <span class="badge badge-primary">
                                {{ Auth::user()->is_super_admin ? 'Super Admin' : (Auth::user()->is_admin ? 'Admin' : 'User') }}
                            </span>
                        </div>
                        @endif
                    </div>
                    @if(Auth::user() && !empty(Auth::user()->profile_photo))
                    <img class="img-profile rounded-circle" src="{{ asset('storage/'.Auth::user()->profile_photo) }}" alt="User Avatar" style="width: 40px; height: 40px; object-fit: cover;">
                    @else
                    <div class="img-profile rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    @endif
                </div>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile.show') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                    <i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                    Edit Profile
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}" class="px-3">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </button>
                </form>
            </div>
        </li>

        <!-- Nav Item - Logout Button -->
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link nav-link text-danger p-2" style="border: none; background: none;">
                    <i class="fas fa-sign-out-alt fa-sm"></i>
                    <span class="d-none d-lg-inline ml-1">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</nav>