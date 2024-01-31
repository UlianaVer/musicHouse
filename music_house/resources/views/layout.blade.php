<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music House</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-dark">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">Music House</a>
            <img src="{{ asset('img/png-clipart-symbolize-music-note-logo.png') }}" alt="" width="30"
                height="24" class="d-inline-block align-text-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Contact') }}">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('regForm') }}">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('loginForm') }}">Вход</a>
                    </li>
                    @endguest
                    @if (Auth::check() && Auth::user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index')}}">Каталог</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">Категории</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('orders.index')}}">Заказы</a>
                      </li>
                      @endif
                    @if (Auth::check() && !Auth::user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Contact') }}">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">Корзина</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('orders.index') }}">Заказ</a>
                    </li>
                    @endif
                    @auth
                    <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Выход</button>
                            </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- info start -->
    @if (Session::has('info'))
        <div class="alert alert-warning">
            {(session('info'))}
        </div>
    @endif
    @if (isset($info))
        <div class="alert alert-warning">
            {($info)}
        </div>
    @endif
    <!-- info end -->
        @yield('content')

    <footer>
        <!-- carousel end start -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}">Music House</a>
                <img src="{{ asset('img/png-clipart-symbolize-music-note-logo.png') }}" alt="" width="30"
                    height="24" class="d-inline-block align-text-top">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Contact') }}">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('regForm') }}">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('loginForm') }}">Вход</a>
                        </li>
                        @endguest
                        @if (Auth::check() && Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products.index')}}">Каталог</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('categories.index')}}">Категории</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('orders.index')}}">Заказы</a>
                          </li>
                          @endif
                        @if (Auth::check() && !Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Contact') }}">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.index') }}">Корзина</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('orders.index') }}">Заказ</a>
                        </li>
                        @endif
                        @auth
                        <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Выход</button>
                                </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- carousel end end -->
    </footer>

    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
