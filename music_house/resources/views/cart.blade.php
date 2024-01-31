@extends('layout')
@section('content')
    @guest
        <p>Вы не авторизированны, пожалуйста войдите в аккаунт для просмотра содержимого.</p>
    @endguest


    @auth
        <!-- Описание товара start -->
        <div class="container text-light">
            <h1>Корзина</h1>
        </div>
        <!-- Описание товара end -->

        <!-- Основная часть start -->


        @forelse ($products as $product)
        <div class="container d-flex justify-content"> -->
            <div class="card" style="width: 18rem;">
                <img src="asset($product->img_path)" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->price}}</p>
                    <p>Количество: <span id="card-quantity">{{$product->pivot->qty}}</span></p>
                </div>
            </div>
        </div>
     <!--    <div class="container w-100">
            <button id="btn_increment">+</button>
            <input type="number" name="" id="duhast1">
            <button id="btn_decrement">-</button>
        </div> -->
        <form action="{{route('cart.change', ['product_id'=>$product->id])}}" method="POST">
            @csrf
            <input type="number" name="qty" value="{{$product->pivot->qty}}" min="0"
                max="{{$product->qty}}">
            <button type="submit" class="btn btn-primary">Изменить</button>
            <p>Сумма</p> <input type="number" name="sum" id="sum" value="{{$product->pivot->qty * $product->price}}">
        </form>
        <form action="{{ route('cart.destroy', ['id'=>$product->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        @empty
        <p class="text-center fs-2">Корзина пустая</p>
        @endforelse
        <!-- Основная часть end -->

        {{-- подтверждение начало  --}}
        <form action="{{ route('orders.store') }}" method="POST" class="text-center">
            @csrf
            <label class="text-white" for="password">Введите пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>

            <button type="submit" class="btn btn-primary">Оформить заказ</button>
        </form>
        {{-- поджтверждение конец --}}

    @endauth
@endsection
