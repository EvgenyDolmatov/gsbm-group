@extends('layouts.education')

@section('title', $quiz->title . ' - ошибки')
@section('content')
    <section id="quiz">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="actions">
                    <a href="{{route('account.my-courses')}}" class="btn btn-brand">Назад</a>
                </div>

                <div class="header">
                    <h2 class="quiz-title">{{$quiz->title . ' - ошибки'}}</h2>
                </div>

                <div class="quiz-container">
                    <form id="quiz-form" action="#" method="post">
                        <div class="questions">
                            @foreach($quiz->questions as $key => $question)
                                <div class="question">
                                    <h4 class="question @if($question->isAnswerIncorrect($result)) text-danger @endif">{{($key+1).'. '.$question->question_text}}</h4>
                                    @foreach($question->options as $option)
                                        <div class="{{$question->getFormClass()}}">
                                            <input type="{{$question->getInputType()}}" id="{{'option_'.$option->id}}"
                                                   name="{{$question->getInputName()}}"
                                                   value="{{$option->id}}"
                                                   @if($option->checkedAnswer($result)) checked @endif>
                                            <label
                                                for="{{'option_'.$option->id}}" {{$option->setMistakeClass($result)}}>
                                                {{$option->value}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
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
