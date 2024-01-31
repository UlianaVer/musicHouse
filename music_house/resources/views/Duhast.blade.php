<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-dark">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html">Music House</a>
          <img src="../img/png-clipart-symbolize-music-note-logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">О нас</a><!-- главная страница -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('Registration')}}">Регистрация</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('Authorization')}}">Вход</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('Contact')}}">Контакты</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar end -->


    <!-- Каталог start -->
    <div class="container text-light">
        <h1>Наши Духовые инструменты</h1>
    </div>
    <!-- Каталог end -->

<!-- select start -->
<div class="container">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Выбери категорию
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="Duhast.html">Духовые инструменты</a></li>
          <li><a class="dropdown-item" href="Stung.html">Струнные инструменты</a></li>
          <li><a class="dropdown-item" href="Atack.html">Ударные инструменты</a></li>
        </ul>
      </div>
    </div>
    <!-- select end -->

<!-- Карточка start -->
<div class="container d-flex justify-content">
    <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar.html"><img src="../img/catalog-img/Без названия.jfif" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Короткая труба</h5>
          <p class="card-text">299</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy.html"><img src="../img/catalog-img/1200px-Trumpet_1.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">йццук</h5>
          <p class="card-text">100</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy 2.html"><img src="../img/catalog-img/shopping.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Shopping</h5>
          <p class="card-text">12300</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy 3.html"><img src="../img/catalog-img/281e90a40557073abac77064233f582a.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Гофрированная труба</h5>
          <p class="card-text">1300</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy 4.html"><img src="../img/catalog-img/7ab0514f8d7861cc80c6da7da49bf220-228x228.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">IBANEZ 0-TR</h5>
          <p class="card-text">$9300</p>
        </div>
      </div>
    </div>


<!-- Карточка end -->

 <!-- carousel end start -->
 <div class="container p-3">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/photo1696585314.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-danger">
                <h5>Music House</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui sit ratione rem expedita quidem voluptates sequi quibusdam! Facere, numquam. Necessitatibus, cupiditate harum! Adipisci dolorum nobis repellat id vero facere numquam!</p>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- carousel end end -->
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
