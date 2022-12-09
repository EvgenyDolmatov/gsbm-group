@extends('layouts.app')

@section('title', 'Вход в аккаунт')
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
        <h2>Войти <br>в систему</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="text" id="email" class="input-group" name="email" value="{{old('email')}}">
                @error('email')
                <small class="text-danger">{{ __($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" id="password" class="input-group" name="password">
                <div class="d-flex justify-content-between">
                    @error('password')
                    <small class="mt-2 text-danger">{{ __($message) }}</small>
                    @enderror
                    <a href="{{ route('password.request') }}" class="text-primary mt-2">
                        <small class="">Забыли пароль?</small>
                    </a>
                </div>
            </div>
            <button type="submit" class="btn btn-brand">Войти</button>
        </form>
    </div>
@endsection
