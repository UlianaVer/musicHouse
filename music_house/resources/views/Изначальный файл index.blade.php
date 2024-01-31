@extends('layout')
@section('content')

    <!-- carousel start -->
    <div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/maxresdefault.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-danger">
                <h5>Music House</h5>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore rerum quas alias, at asperiores omnis placeat a nemo quo sunt sint repellat neque ipsa voluptas possimus ullam accusamus nisi commodi!</p>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- carousel end -->
<div class="container text-light">
    <h1>Товары</h1>
</div>

<!-- carousel instrumental start -->
<div class="container w-75">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/photo1696587753.jpeg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Гитары</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati libero id magnam doloremque recusandae iusto, eos iure numquam voluptatibus quam, sint eaque quos commodi possimus similique explicabo, eligendi unde velit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/photo1696587790.jpeg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5>Треугольник</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta officia velit, libero molestias sit illum qui. Cumque adipisci ipsum debitis eveniet culpa sed officiis aliquam enim! Quod nisi vitae adipisci!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/photo1696588120.jpeg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5>Баян</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi optio totam eius sit voluptatibus ipsam officiis cum autem eum voluptas quasi deleniti dolore at, esse recusandae maiores, accusantium atque harum!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/photo1696588913.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5>Труба</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit distinctio amet rerum excepturi aspernatur explicabo doloremque sed vitae facilis. Assumenda, eius laboriosam! A aliquid ipsa debitis distinctio amet illo illum.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- carousel instrumental end -->




@endsection
