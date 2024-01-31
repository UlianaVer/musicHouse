@extends('layout')
@section('content')

<form class="text-white w-50 mx-auto" method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
        @csrf
        <label class="form-label" for="title">Название категории</label>
        <input class="form-control" type="text" name="title" id="title" required>
    <button type='submit' class="btn btn-primary mt-3 w-100">Добавить новую категорию</button>
    </form>
@endsection
