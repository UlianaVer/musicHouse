@extends('layout')
@section('content')

    <!-- Каталог start -->
    <div class="container text-light">
        <h1>Наши товары</h1>
    </div>
    <!-- Каталог end -->

<!-- select start -->
<div class="container">
    <form action="{{route('products.filter')}}" method="POST" class="d-flex flex-wrap">
    @csrf
    <div>
        <p class="m-0">Категория:</p>
        <select name="filter" id="filter" class="form-select mb-3">
            <option value="all">Все</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <p class="m-0">Сортировка:</p>
        <select name="sort" id="sort" class="form-select ms-2 mb-3">
            <option value="country">По стране (А-Я)</option>
            <option value="title">По наименованию (А-Я)</option>
            <option value="price">Сначала дешевле</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary ms-2 mb-3 align-self-end">Применить</button>
    </form>
<!-- select end -->
@if (Auth::check() && Auth::user()->is_admin)
    <a href="{{route('products.create')}}" class="btn btn-success my-3">Добавить новый товар</a>
@endif
    {{-- Отображение продуктов начало --}}
@foreach ($products as $product )
<div class="col-12 col-md-6 col-xl-4">
    <div class="card mb-3" style="width: 18rem;">
        <img src="{{asset($product->img_path)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->price}}</p>
            <a href="{{route('products.show', $product)}}" class="btn btn-primary">Подробнее</a>
            @if (Auth::check() && Auth::user()->is_admin)
            <a href="{{route('products.edit', $product)}}" class="btn btn-primary">Изменить</a>
            <form action="{{route('products.destroy', $product)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
            @endif
            @if (Auth::check() && !Auth::user()->is_admin)
            <a href="{{route('cart.store', ['product_id'=>$product->id])}}" class="btn btn-outline-primary">В корзину</a>
            @endif
        </div>
    </div>
</div>
@endforeach
    {{-- Отображение продуктов конец --}}

@endsection
