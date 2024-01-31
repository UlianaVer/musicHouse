@extends('layout')
@section('content')

<form class="text-white w-50 mx-auto" method="POST" action="{{route('products.update', $product)}}"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label class="form-label" for="title">Название товара</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$product->title}}" required>

            <label class="form-label" for="description">Описание</label>
            <textarea class="form-control" name="description" id="description" required>{{$product->description}}</textarea>

            <label class="form-label" for="price">Цена</label>
            <input class="form-control" type="number" name="price" id="price" value="{{$product->price}}" required>

            <label class="form-label" for="model">Модель</label>
            <input class="form-control" type="text" name="model" id="model" value="{{$product->model}}" required>

            <label class="form-label" for="year">Год</label>
            <input class="form-control" type="number" name="year" id="year" value="{{$product->year}}" required>

            <label class="form-label" for="country">Страна</label>
            <input class="form-control" type="text" name="country" id="country" value="{{$product->country}}" required>

            <label class="form-label" for="qty">Количество</label>
            <input class="form-control" type="number" name="qty" id="qty" value="{{$product->qty}}" required>


    <label class="form-label" for="title" class="form-label">Категория</label>
    <select name="category_id" id="category_id" class="form-select">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
    </select>

    <label class="form-label" for="img" class="form-label">Изображение</label>
    <input class="form-control" type="file" class="form-control" id="img" name="img" value="{{$product->img_path}}">

    <button type='submit' class="btn btn-primary mt-3 w-100">Изменить</button>
    </form>
@endsection
