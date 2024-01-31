<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">
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
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('products.index')}}">Каталог</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('categories.index')}}">Категории</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('orders.index')}}">Заказы</a>
                  </li>
                </ul>
              </div>
        </div>
    </nav>
    @yield('content')
    <!-- navbar end -->
</body>
</html>
