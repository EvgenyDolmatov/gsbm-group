@extends('layouts.education')

@section('title', 'Тест: '. $result->stage->quiz->title)
@section('main-tag-class', 'centered-content')
@section('content')
    <div class="container-xl container-fluid">
        <h2 class="title text-center">{{'Тест: '. $result->stage->quiz->title}}</h2>
    </div>

    <div class="form-container quiz-result">
        @if($result->stage->quiz->getResult()->points >= 50)
            @if($result->stage->quiz->getResult()->is_exam)
                <h2 class="mb-5">Поздравляем!<br>Экзамен успешно сдан!</h2>
            @else
                <h2 class="mb-5">Поздравляем!<br>Тест успешно пройден!</h2>
            @endif
        @else
            @if($result->stage->quiz->getResult()->is_exam)
                <h2 class="mb-5">К сожалению,<br>вы не сдали экзамен.</h2>
            @else
                <h2 class="mb-5">К сожалению,<br>вы не прошли тест.</h2>
            @endif
        @endif

        <div class="row quiz-statistic">
            <!-- Right Answers -->
            <div class="col-md-4 col-12">
                <div class="item-result h-100">
                    <div
                        class="value">{{ ($result->stage->quiz->questions->count() - count($result->stage->quiz->calculateResult()['wrongQuestionsList'])) . " / " .$result->stage->quiz->questions->count() }}</div>
                    <div class="title">Верных ответов</div>
                </div>
            </div>
            <!-- Points -->
            <div class="col-md-4 col-12">
                <div class="item-result h-100">
                    <div class="value">{{$result->stage->quiz->getResult()->points}}</div>
                    <div class="title">Количество баллов</div>
                </div>
            </div>
            <!-- Grade -->
            <div class="col-md-4 col-12">
                <div class="item-result h-100">
                    <div class="value">{{$result->stage->quiz->getGrade()}}</div>
                    <div class="title">Оценка</div>
                </div>
            </div>
        </div>

        <!-- Mistakes -->
        <div class="item-result mistakes">
            <div class="d-flex justify-content-center">
                <a href="{{ route('account.quiz.mistakes', [$result->stage->quiz, $result->stage->quiz->getResult()]) }}" class="btn btn-danger">Посмотреть ошибки</a>
                @if(!$result->stage->quiz->getResult()->is_exam && $result->stage->quiz->getResult()->points <= 50)
                    <a href="{{route('account.quizzes.show', $result->stage->quiz->id)}}" class="btn btn-brand">Пересдать</a>
                @endif
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{route('account.my-courses')}}" class="btn btn-brand btn-rounded-10">Вернуться к лекциям</a>
    </div>
@endsection
