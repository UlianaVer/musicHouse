@extends('layout')
@section('content')

<main>
    <div class="container-fluid px-auto w-75 my-5">
        <h1 class="text-center  my-5">Магазин музыкальных инструментов Music House</h1>
        <p class="mb-5" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quasi sit alias maxime, veniam eum ab, nisi non ipsam quas culpa error ad iusto eos voluptas minima quidem explicabo! Repellat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ea iste maiores dolore quisquam. Impedit sed, natus perspiciatis deleniti ipsum, necessitatibus fugit architecto nostrum id aliquid, in libero. Dolor, unde!Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ab ipsum ut at consectetur expedita quaerat. Quas, officia possimus quae voluptatem, laudantium tenetur reprehenderit quaerat ea necessitatibus nisi ducimus eligendi!</p>



        <!-- carousel instrumental start -->
<div class="container w-75">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach ($products as $key => $product)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
              <img src="{{$product->img_path}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$product->title}}</h5>
                <p>{{$product->description}}</p>
              </div>
            </div>
            @endforeach
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
</main>
@endsection
