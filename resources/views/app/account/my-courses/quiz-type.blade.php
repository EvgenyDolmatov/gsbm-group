@extends('layouts.app')

@section('title', 'Выберите тип урока')
@section('main-tag-class', 'centered-content')
@section('content')
    <div class="form-container">
        <h2>Выберите тест</h2>

        <div class="large-btn-group">
            <a href="#" class="btn btn-brand btn-large">Самоподготовка</a>
            <a href="{{route('account.quizzes.show', $quiz->id)}}" class="btn btn-brand btn-large btn-filled">Экзамен</a>
        </div>

        <a href="{{route('account.my-courses')}}" class="btn btn-brand">Назад</a>
    </div>
@endsection
