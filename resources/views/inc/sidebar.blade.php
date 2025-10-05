<!-------------------------------------------------sidebar------------------------------------------------->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    <div class="sidebar-brand">
        <a href="/" class="brand-link">
            <img src="{{ asset('images/ISC-2025.jpg') }}" alt="Logo" class="brand-image opacity-75 shadow"/>
            <span class="brand-text fw-light">{{ config('app.name', 'Laravel') }}</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Main navigation" data-accordion="false" id="navigation">
                <li class="nav-item">
                    <a href="/dashboard" class="{{ Request::path() == 'dashboard' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">MAIN</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people-fill"></i>
                        <p>Users <i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/users" class="{{ Request::path() == 'users' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Users list</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/users/create" class="{{ Request::path() == 'users' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Create user</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/event-registrations" class="{{ Request::path() == 'event-registrations' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon bi bi-calendar2-event-fill"></i>
                        <p>Registrations</p>
                    </a>
                </li>


                <li class="nav-header">OTHER</li>
                 <li class="nav-item">
                     <a class="{{ Request::path() == 'logout' ? 'nav-link active' : 'nav-link' }}" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i class="bi bi-box-arrow-left"></i>
                        <p>Log Out</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
    </div>

</aside>
<!-------------------------------------------------./sidebar------------------------------------------------->
