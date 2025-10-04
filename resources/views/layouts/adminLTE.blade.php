<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-------------------------------------------------head------------------------------------------------->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--FivoIcon-->
    {{-- <link href="{{ asset('images/logo.png') }}" rel="icon" type="image/x-icon" /> --}}
    <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/x-icon" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- BoostrapIcons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<!-------------------------------------------------./head------------------------------------------------->

<!-------------------------------------------------body------------------------------------------------->
<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <!-------------------------------------------------wrapper------------------------------------------------->
    <div id="adminLTE" class="app-wrapper">

        <!-------------------------------------------------nav------------------------------------------------->
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="/event-booking" class="nav-link">Event Booking</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="user-image rounded-circle shadow-sm bg-primary p-2 text-light">{{ preg_filter('/[^A-Z]/', '', Auth::user()->name) }}</span>
                            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <li class="user-header text-bg-primary">
                                <span class="rounded-circle shadow display-5 p-2 m-3">{{ preg_filter('/[^A-Z]/', '', Auth::user()->name) }}</span>
                                <p>
                                    {{ Auth::user()->name }} - Web Developer
                                    <small>Member since {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('d M, y') }}</small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <a href="/dashboard">Dashboard</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="/event-registrations">Registrations</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="/users">Users</a>
                                    </div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a class="btn btn-default btn-flat float-end" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-------------------------------------------------./nav------------------------------------------------->

        <!-----------------------------------------sidebar--------------------------------------------------->
        @include('inc.sidebar')
        <!-----------------------------------------./sidebar--------------------------------------------------->

        <!-------------------------------------------------main------------------------------------------------->
        <main class="app-main py-2">

            <!-------------------------------------------------messages------------------------------------------------->
            <div class="container-fluid">
                @include('inc.messages')
            </div>
            <!-------------------------------------------------./messages------------------------------------------------->

            @yield('content')
        </main>
        <!-------------------------------------------------./main------------------------------------------------->

        <!-----------------------------------------footer--------------------------------------------------->
        <footer class="app-footer">
            <div class="float-end d-none d-sm-inline">Powered by <a href="http://kipre.go.ke" target="_blank" rel="noopener noreferrer">Primate Research</a></div>
            <strong>Copyright &copy&nbsp;{{date('Y')}}&nbsp; <a href="/" class="text-decoration-none">{{config('app.name', 'Laravel')}}</a>.</strong> All rights reserved.
      </footer>
        <!-----------------------------------------./footer--------------------------------------------------->

    </div>
    <!-------------------------------------------------wrapper------------------------------------------------->

</body>
<!-------------------------------------------------./body------------------------------------------------->
