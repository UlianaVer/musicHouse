@extends('layout')
@section('content')
    <h2 class="text-center mt-5 text-white">Описание товара</h2>

    <div class="container text-white">

        <div class="row">

            <div class="col-md-6 mx-auto">

                <div class="d-flex align-items-center">

                    <img src="{{ asset($product->img_path) }}" alt="" class="card-item">

                    <div class="p-5">

                        <p><b>Название:</b>{{ $product->title }}</p>

                        <p><b>Категория: </b>{{ $product->category->title }}</p>

                        <p><b>Производитель: </b>{{ $product->country }}</p>

                        <p><b>Год выпуска: </b>{{ $product->year }}</p>

                        <p><b>Цена: </b>{{ $product->price }}</p>
                        @if (Auth::check() && !Auth::user()->is_admin)
                        <div class="d-grid gap-2">
                            <a href="{{ route('cart.store', ['product_id' => $product->id]) }}" class="btn btn-dark align-items-center">Добавить в корзину</a>
                        </div>
                        @endif
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
