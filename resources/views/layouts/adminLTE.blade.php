<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-------------------------------------------------head------------------------------------------------->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRFToken -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- AppName -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--FivoIcon-->
    {{-- <link href="{{ asset('images/logo.png') }}" rel="icon" type="image/x-icon" /> --}}
    <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/x-icon" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Manrope" rel="stylesheet"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> --}}
</head>
<!-------------------------------------------------./head------------------------------------------------->

<!-------------------------------------------------body------------------------------------------------->
<body class="hold-transition sidebar-mini" >

    <!-------------------------------------------------wrapper------------------------------------------------->
    <div class="wrapper">

        <!-----------------------------------------adminLTE-------------------------------------------------->
        <section id="adminLTE">

            <!-----------------------------------------nav--------------------------------------------------->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Right Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-user-circle mt-2"></i>
                            @if(Auth::user() != null)
                                <span>&nbsp;{{Auth::user()->name}}</span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="/" class="dropdown-item">
                                <i class="fas fa-home fa-fw" aria-hidden="true"></i>Home</a>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-fw" aria-hidden="true"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

            </nav>
            <!-----------------------------------------./nav--------------------------------------------------->

            <!-----------------------------------------sidebar--------------------------------------------------->
            @include('inc.sidebar')
            <!-----------------------------------------./sidebar--------------------------------------------------->

            <!-----------------------------------------content-wrapper--------------------------------------------------->
            <div class="content-wrapper">

                <!-------------------------------------------------main------------------------------------------------->
                <main class="py-4">

                    <!-------------------------------------------------messages------------------------------------------------->
                    <div class="container-fluid">
                        @include('inc.messages')
                    </div>
                    <!-------------------------------------------------./messages------------------------------------------------->


                    @yield('content')
                </main>
                <!-------------------------------------------------./main------------------------------------------------->

            </div>
            <!-----------------------------------------./content-wrapper--------------------------------------------------->

        </section>
        <!-----------------------------------------./adminLTE--------------------------------------------------->

        <!-----------------------------------------footer--------------------------------------------------->
        <footer class="main-footer">
            <strong class="pull-center">&copy;&nbsp;{{date('Y')}}&nbsp;<a href="/" class="text-success">{{config('app.name', 'Laravel')}}</a>. All rights reserved</strong>
            <span class="float-right d-none d-sm-block">Powered by&nbsp;<a href="http://konza.go.ke" target="_blank" rel="noopener noreferrer" class="text-success">Konza Technopolis</a></span>
        </footer>
        <!-----------------------------------------./footer--------------------------------------------------->

    </div>
    <!-------------------------------------------------wrapper------------------------------------------------->


</body>
<!-------------------------------------------------./body------------------------------------------------->

</html>
