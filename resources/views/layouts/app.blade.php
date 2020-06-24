<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/logo.png" type="image/gif" sizes="16x16">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GAMEKU - App Retail Top Up Game</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Teko&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gameku.css') }}" rel="stylesheet">

    <!-- Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="divnav">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                    @guest
                        <a class="sansarrow navbar-brand" href="{{ url('/') }}">
                             <img src="https://fonts.gstatic.com/s/i/materialicons/games/v6/24px.svg?download=true" width="40" height="40" class="d-inline-block align-top" alt="" style="filter: contrast(4) invert(1);">
                            <b class="am-tracking" style="letter-spacing:3px;">GAMEKU</b>
                        </a>
                     @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                        <a class="navbar-brand" href="{{ url('/') }}">
                             <img src="https://fonts.gstatic.com/s/i/materialicons/games/v6/24px.svg?download=true" width="30" height="30" class="d-inline-block align-top" alt="" style="filter: contrast(4) invert(1);">
                            <!-- {{ config('app.name', 'Laravel') }} -->
                        </a>
                        <li class="nav-item">
                            <a class="btnuser nav-link" href="{{ route('home') }}"><img src="https://fonts.gstatic.com/s/i/materialicons/dashboard/v6/24px.svg?download=true" width="30" height="30" class="d-inline-block" alt="" style="filter: contrast(4) invert(1);"> <z style=" letter-spacing: 4px; ">Dashboard</z></a>
                        </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btnuser nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btnuser nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btnuser nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="https://fonts.gstatic.com/s/i/materialicons/account_circle/v6/24px.svg" width="30" height="30" class="d-inline-block" alt="" style="filter: contrast(4) invert(1);"> {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/users/{{ Auth::user()->id }}/view">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
