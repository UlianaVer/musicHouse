@extends('layout')
@section('content')
@guest
    <p>Вы не авторизированны, пожалуйста войдите в аккаунт для просмотра содержимого.</p>
@endguest
@if (Auth::check() && !Auth::user()->is_admin)
<!-- Для пользователя  начало -->
@foreach($orders as $order)
    <div>
        <p>Названия товаров:
            @foreach ($order->products as $product)
            {{  $product->title }}</p>
            @endforeach
        <p>Статус заказа: {{ $order->status }}</p>
        <p>Дата заказа: {{ $order->created_at }}</p>
        @if($order->status == 'Новый')
        <form action="{{route('orders.destroy', $order)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        @endif
    </div>
@endforeach
@endif
<!-- Для пользователя конец -->
@if (Auth::check() && Auth::user()->is_admin)
<!-- Для админа конец -->
@foreach($orders as $order)
<div>----</div>
    <div>
        <p>Имя клиента: {{ $order->user->name }}</p>
        <p>Фамилия клиента: {{ $order->user->surname }}</p>
        <p>Отчество клиента: {{ $order->user->patronymic }}</p>
        <p>Названия товаров:
            @foreach ($order->products as $product)
            {{  $product->title }}</p>
            @endforeach
        <p>Статус заказа: {{ $order->status }}</p>
        <p>Дата заказа: {{ $order->created_at }}</p>
        @if($order->status == 'Новый')
        <form action="{{route('orders.update', $order)}}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger">Подтвердить</button>
        </form>
        @elseif($order->status == 'В обработке')
        <form action="{{route('orders.update', $order)}}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger">Выполнить</button>
        </form>
        @endif
    </div>
@endforeach
@endif
<!-- Для админа начало -->
@endsection

