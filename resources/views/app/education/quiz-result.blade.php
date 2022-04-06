@extends('layouts.education')

@section('title', 'Тест: '. $quiz->title)
@section('main-tag-class', 'centered-content')
@section('content')
    <div class="container-xl container-fluid">
        <h2 class="title text-center">{{'Тест: '. $quiz->title}}</h2>
    </div>

    <div class="form-container quiz-result">
        @if($quiz->getResult()->points >= 50)
            <h2>Тест пройден</h2>
        @else
            <h2>Тест не пройден</h2>
        @endif

    <!-- Points -->
        <div class="item-result">
            <div class="value">{{$quiz->getResult()->points}}</div>
            <div class="title">Количество баллов</div>
        </div>
        <!-- Grade -->
        <div class="item-result">
            <div class="value">{{$quiz->getGrade()}}</div>
            <div class="title">Оценка</div>
        </div>
        <!-- Mistakes -->
        <div class="item-result mistakes">
            <div class="value">{{implode(', ', $quiz->calculateResult()['wrongAnswers'])}}</div>
            <div class="title">Ошибки</div>
        </div>

        @if($quiz->getResult()->points <= 50)
            <a href="{{route('account.quizzes.show', $quiz->id)}}" class="btn btn-brand btn-large">Пересдать</a>
        @endif
    </div>

    <div class="text-center mt-5">
        <a href="{{route('account.my-courses')}}" class="btn btn-brand btn-rounded-10">Назад</a>
    </div>
@endsection
