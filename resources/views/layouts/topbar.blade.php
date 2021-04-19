<nav class="nav navbar navbar-expand-lg navbar-white bg-white sticky-top">
    <div class="container">
        <a class="navbar-nav" href="../views/"><img width="120px" height="auto" src="../img/logo.png" alt="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#onDisplayResolutionChange" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <ul class="navbar nav">
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
</nav>

<nav class="nav navbar-expand-sm d-flex justify-content-center">
    <ul class="nav d-flex justify-content-around w-50 bg-white nav-border-bottom">
        <li>
            <a class="nav-link navka" href="#"><i class="fa fa-heart-o pr-2"></i>Moje listy</a>
        </li>
        <li>
            <a class="nav-link navka" href="#"><i class="fa fa-group pr-2"></i>Udostępnione</a>
        </li>
        <li>
            <a class="nav-link navka" href="#"><i class="fa fa-desktop pr-2"></i>Konfigurator</a>
        </li>
    </ul>
</nav>