@extends('layouts.app')

@section('title', 'Выберите тип урока')
@section('main-tag-class', 'centered-content')
@section('content')
    <div class="form-container">
        <h2>Экзамен</h2>
        <p><span class="text-danger">Внимание!</span><br>На сдачу экзамена дается только одна попытка. </p>

        <div class="large-btn-group">
            <a href="{{route('account.quizzes.show', $quiz->id)}}" class="btn btn-brand btn-large btn-filled">Сдать экзамен</a>
        </div>

        <a href="{{route('account.my-courses')}}" class="btn btn-brand">Вернуться к лекциям</a>
    </div>
@endsection
