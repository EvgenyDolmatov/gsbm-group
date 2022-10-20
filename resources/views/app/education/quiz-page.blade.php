@extends('layouts.education')

@section('title', $quiz->title . ' - экзамен')
@section('content')
    <section id="quiz">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="actions">
                    <a href="{{route('account.choose-quiz', $quiz)}}" class="btn btn-brand">Назад</a>
                </div>

                <div class="header">
                    <h2 class="quiz-title">{{$quiz->title . ' - экзамен'}}</h2>
                </div>

                <div class="quiz-container">
                    <form id="quiz-form" action="{{route('account.quiz.answers.store', $quiz)}}" method="post">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <span>Вы ответили не на все вопросы.</span>
                            </div>
                        @endif

                        <input type="hidden" name="time_spent" value="0">

                        <div class="questions">
                            @foreach($quiz->questions as $key => $question)
                                <div class="question">
                                    <h4 class="question">{{($key+1).'. '.$question->question_text}}</h4>

                                    @foreach($question->options as $option)
                                        <div class="{{$question->getFormClass()}}">
                                            <input type="{{$question->getInputType()}}" id="{{'option_'.$option->id}}"
                                                   name="{{$question->getInputName()}}"
                                                   value="{{$option->id}}" {{$question->getInputChecked($option)}}>
                                            <label for="{{'option_'.$option->id}}">{{$option->value}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                        <div class="finish">
                            <button type="submit" class="btn btn-brand btn-filled">Завершить экзамен</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div id="time-control" class="time-control">
        <span id="time-counter" data-limit="{{ $quiz->time_limit }}">{{ $quiz->time_limit }}</span>
    </div>
@endsection

@section("additional-scripts")
    <script src="{{ asset('assets/app/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
@endsection
