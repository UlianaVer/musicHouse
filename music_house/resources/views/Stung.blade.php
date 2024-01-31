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
<body class="bg-light">
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
        <h1>Наши Струнные товары</h1>
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
        <a href="../pages/Pages disc/Description_tovar copy 5.html"><img src="../img/catalog-img/2744535_original.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Гармошка</h5>
          <p class="card-text">3200</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy 6.html"><img src="../img/catalog-img/S9de7dea7507346d19440e22d8b5661b9T.webp" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Арфа</h5>
          <p class="card-text">200</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy 7.html"><img src="../img/catalog-img/7891e7ef658412db547d5d4d21c1159b443ab8e4.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Звук</h5>
          <p class="card-text">9800</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy 8.html"><img src="../img/catalog-img/gusli.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Гусли</h5>
          <p class="card-text">21300</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="../pages/Pages disc/Description_tovar copy 9.html"><img src="../img/catalog-img/main_250x250.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">Балалайка</h5>
          <p class="card-text">9250</p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt soluta unde voluptates, harum nam omnis atque quam excepturi vero, voluptatem ipsa nihil. Tempore dicta eveniet atque amet, dolorum fugiat dolor.</p>
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
