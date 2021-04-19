<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navi.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="nav navbar navbar-expand-lg navbar-white bg-white sticky-top">
            <div class="container">
                <a class="navbar-nav" href="../views/"><img width="120px" height="auto" src="../img/logo.png" alt="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#onDisplayResolutionChange" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    </div>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav">
                                    <a class="nav-link navka" href="{{ route('login') }}"><i class="fa fa-user navka"></i> {{ __('Zaloguj się') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav">
                                    <a class="nav-link navka" href="{{ route('register') }}"><i class="fa fa-user-plus navka"></i>{{ __('Zarejestruj się') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="nav navbar-expand-sm navbar-white bg-white sticky-top navbot">
            <div class="container">
					<ul class="nav" style="padding-left:10%">
					<li class="col">
						<a  class="nav-link navka" href="#"><i class="fa fa-heart-o navka"></i>  Moje listy</a>
					</li>
					<li class="col">
						<a  class="nav-link navka" href="#"><i class="fa fa-group navka"></i> Udostępnione</a>
					</li>
					<li class="col">
						<a  class="nav-link navka" href="#"><i class="fa fa-desktop  navka"></i>  Konfigurator</a>
					</li>
					</ul>
            </div>
            </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3810206ae2.js" crossorigin="anonymous"></script>
</body>
</html>
