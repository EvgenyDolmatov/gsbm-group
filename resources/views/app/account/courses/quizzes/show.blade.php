@extends('layouts.account')

@section('title', $quiz->title)
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.account-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>{{$quiz->title}}</h2>
                            </div>

                            <p class="mb-5">{!! $quiz->description !!}</p>

                            <h4>Вопросы</h4>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="width: 50px">№</th>
                                    <th scope="col">Вопрос</th>
                                    <th scope="col">Ответы</th>
                                    <th scope="col" style="width: 100px">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($quiz->questions as $key => $question)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td style="font-size: 12px">{{$question->question_text}}</td>
                                        <td style="font-size: 12px">
                                            @foreach($question->options as $option)
                                                @if($option->is_correct)
                                                    <div class="text-success">{{$option->value}}</div>
                                                @else
                                                    <div class="text-danger">{{$option->value}}</div>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="actions">
                                            <a href="{{ route('questions.edit', [$quiz, $question]) }}"
                                               class="text-primary">Изменить</a>

                                            <form action="{{route('questions.destroy', [$quiz, $question])}}"
                                                  method="POST">
                                                @csrf @method('delete')

                                                <a href="{{route('questions.destroy', [$quiz, $question])}}" class="text-danger"
                                                   onclick="event.preventDefault();if(confirm('Вопрос будет удален. Продолжить?')){this.closest('form').submit();}">
                                                    Удалить
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-end mt-5">
                                <a href="{{route('questions.create', $quiz)}}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Добавить вопрос
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
