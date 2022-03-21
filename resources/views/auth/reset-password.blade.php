@extends('layouts.app')

@section('title', 'Сброс пароля')
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
        <h2>Сброс пароля</h2>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="email" id="email" class="input-group" name="email" value="{{old('email', $request->email)}}">
                @error('email')
                <small class="text-danger">{{ __($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" id="password" class="input-group" name="password">
                @error('password')
                <small class="mt-2 text-danger">{{ __($message) }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Повторите пароль</label>
                <input type="password" id="password_confirmation" class="input-group" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-brand">Войти</button>
        </form>
    </div>
    <div class="container">
        <div class="d-flex justify-center">
            <p class="m-auto mt-3 form-control-sm text-black-50">
                Уже регистрировались? <a class="text-primary" href="{{route('login')}}">Войти</a>
            </p>
        </div>
    </div>
@endsection
