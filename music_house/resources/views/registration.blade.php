@extends('layout')
@section('content')
    <div class="container text-light">
        <h1>Регистрация</h1>
    </div>


    <!-- Форма регистрации start -->
<div class="container mx-auto my-auto mt-5">

    <form action="{{route('register')}}" method="POST">
        @csrf 
    <div class="input-group mb-3">
        <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Имя" required>
    </div>

    <div class="input-group mb-3">
        <input type="text"name="surname" id="surname" value="{{old('surname')}}" class="form-control" placeholder="Фамилия" required>
    </div>

    <div class="input-group mb-3">
        <input type="text" name="patronymic" id="patronymic" value="{{old('patronymic')}}" class="form-control" placeholder="Отчество">
    </div>

    <div class="input-group mb-3">
        <input type="text" name="login" id="login" value="{{old('login')}}" class="form-control" placeholder="Логин" required>
    </div>

    <div class="input-group mb-3">
        <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Почта" required>
    </div>

    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
    </div>

    <div class="input-group mb-3">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Подтверждение пароля" required>
    </div>

    <div class="text-light">
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." required>
        <label for="form-check-input">Я согласен на обработку моих персональных данных </label>
      </div>
<!-- Валидация начало -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Валидация конец -->
      <button type="submit" class="btn btn-light">Зарегистрироваться</button>
</form>
    </div>

    <!-- Форма регистрации end -->
@endsection
