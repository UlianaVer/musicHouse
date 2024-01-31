@extends('layout')
@section('content')
<main>
    <div class="d-flex flex-column my-5 justify-content-center align-items-center w-100">
        <h1 class="text-center mb-5">Где нас найти</h1>

        <div class="d-flex justify-content-center w-100 mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8981.294174676796!2d37.57712251738278!3d55.7528816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b028fbae20d%3A0x4dc2cf467e9a8473!2sMusic%20Lab!5e0!3m2!1sru!2sru!4v1697477935060!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="d-flex flex-row justify-content-around w-75">
            <p>Адрес: <span class="fw-light">ул. 1, стр. 1, этаж 2</span></p>
            <p>Телефон: <span class="fw-light">+7-(777)-77-77</span></p>
            <p>Почта: <span class="fw-light">musicHouse@mail.ru</span></p>
        </div>
    </div>
</main>
@endsection
