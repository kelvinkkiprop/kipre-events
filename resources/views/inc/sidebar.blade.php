<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image text-white1">
                {{-- <i class="fas fa-user-circle fa-3x mt-2 img-circle elevation-2" alt="User Image"></i> --}}
                 <div class="alert alert-success rounded h5 font-weight-bold">
                    {{ preg_filter('/[^A-Z]/', '', Auth::user()->name) }}
                </div>
            </div>
            <div class="info">
                @if (Auth::user() != null)
                    <a href="/dashboard" class="d-block">
                        {{ Auth::user()->name }}
                    </a>
                    <small class="text-white"><i class="fas fa-circle text-success"></i>&nbsp;Online</small>
                @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 sidebarmenu">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="{{ Request::path() == 'dashboard' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">MAIN</li>
                <li class="nav-item">
                    <a href="/activities"
                        class="{{ Request::path() == 'activities' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Activities</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/meetings" class="{{ Request::path() == 'meetings' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Meetings</p>
                    </a>
                </li>

                <li class="nav-header">MANAGE</li>
                <!-- Admin -->
                {{-- @if (Auth::user()->role == 1) --}}
                <li class="nav-item">
                    <a href="/venues" class="{{ Request::path() == 'venues' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fas fa-location"></i>
                        <p>Venues</p>
                    </a>
                </li>
                {{-- @endif --}}
                <!-- Admin -->
                @if (Auth::user()->role == 1)
                    <li class="nav-item">
                        <a href="/users" class="{{ Request::path() == 'users' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
                @endif

                <li class="nav-header">SETTINGS</li>
                <li class="nav-item">
                    <a href="/profile" class="{{ Request::path() == 'profile' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.Sidebar Menu -->

    </div>
    <!-- /.Sidebar -->

</aside>
<!-- ./Main Sidebar Container -->
