@extends('layouts.app')

@section('main-tag-class', 'page education')
@section('logo')
    <div class="logo">
        <a href="{{route('app.front-page')}}">
            <img src="{{asset('assets/app/img/logo-edu.svg')}}" alt>
        </a>
    </div>
@endsection
