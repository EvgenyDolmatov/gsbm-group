@extends('layouts.app')

@section('title', 'Забыли пароль')
@section('main-tag-class', 'centered-content')
@section('logo')
    <div class="logo">
        <a href="{{route('app.front-page')}}">
            <img src="{{asset('assets/app/img/logo.svg')}}" alt>
        </a>
    </div>
@endsection
@section('content')
    <div class="form-container">
        <h2>Забыли пароль?</h2>

        <div class="mb-4 text-sm text-gray-600">
            Введите свою электронную почту в поле ниже, и мы вышлем ссылку для сброса пароля.
        </div>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="text" id="email" class="input-group" name="email" value="{{old('email')}}">
                @error('email')
                <small class="text-danger">{{ __($message) }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-brand">Сбросить пароль</button>
        </form>
    </div>
    <div class="container">
        <div class="d-flex justify-center">
            <p class="m-auto mt-3 form-control-sm text-black-50">
                <a class="text-primary" href="{{route('login')}}">Войти в аккаунт</a>
            </p>
        </div>
    </div>
@endsection
