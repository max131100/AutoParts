<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Auto Parts</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('user.home')}}">Auto Parts Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.part.index')}}">Parts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(auth()->user() !== null)
                            {{auth()->user()->name}}
                            @else
                            Authorize
                        @endif
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(auth()->user() === null)
                            <li><a class="dropdown-item" href="{{ route('login') }}">Sign in</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Sign up</a></li>
                            <li><hr class="dropdown-divider"></li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                    </ul>
                </li>
                @can('view', auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main.index')}}">Admin</a>
                </li>
                @endcan
                @if(auth()->user() !== null)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.cart.index')}}">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.balance.index')}}">Balance</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
    <div>
        @yield('content')
    </div>
</body>
</html>
