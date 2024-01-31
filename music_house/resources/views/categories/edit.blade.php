@extends('layout')
@section('content')

<form class="text-white w-50 mx-auto" method="POST" action="{{route('categories.update', $category)}}">
        @csrf
        @method('PUT')
        <label class="form-label" for="title">Название товара</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$category->title}}" required>

    <button type='submit' class="btn btn-primary mt-3 w-100">Изменить</button>
    </form>
@endsection
