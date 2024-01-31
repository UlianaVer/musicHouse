@extends('layout')
@section('content')

 {{-- Отображение продуктов начало --}}
 @foreach ($category as $category)
 <div class="col-12 col-md-6 col-xl-4">
     <div class="card mb-3" style="width: 18rem;">
         <div class="card-body">
             <h5 class="card-title">{{$category->title}}</h5>
             <a href="{{route('categories.edit', $category)}}" class="btn btn-primary">Изменить</a>
             <form action="{{route('categories.destroy', $category)}}" method="post">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Удалить</button>
             </form>
         </div>
     </div>
 </div>
 @endforeach
     {{-- Отображение продуктов конец --}}
    {{-- Создание начало --}}
    <a href="{{route('categories.create')}}" class="btn btn-success my-3">Добавить новую категорию</a>
    {{-- Создание конец --}}
@endsection
