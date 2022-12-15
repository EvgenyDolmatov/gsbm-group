@extends('layouts.account')

@section('title', $course->title)
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
                                <h2>{{$course->title}}</h2>
                            </div>

                            <p class="mb-5">{!! $course->description !!}</p>

                            <h4>Лекции</h4>
                            @if($course->lessons()->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Название лекции</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($course->lessons->sortBy('title') as $key => $lesson)
                                        <tr>
                                            <td>
                                                <a href="{{ route('account.lesson.show', $lesson) }}">{{$lesson->title}}</a>
                                            </td>
                                            <td class="actions">
                                                <a href="{{ route('lessons.edit', [$course, $lesson]) }}"
                                                   class="text-primary">Изменить</a>

                                                <form action="{{route('lessons.destroy', [$course, $lesson])}}"
                                                      method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{route('lessons.destroy', [$course, $lesson])}}"
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Лекция будет удалена. Продолжить?')){this.closest('form').submit();}">
                                                        Удалить
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>В курсе пока нет ни одной лекции.</p>
                            @endif

                            <div class="d-flex justify-content-end mt-3 mb-5">
                                <a href="{{route('lessons.create', $course)}}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Добавить лекцию
                                </a>
                            </div>


                            <h4>Экзамены</h4>
                            @if($course->quizzes()->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Название экзамена</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($course->quizzes->sortBy('title') as $key => $quiz)
                                        <tr>
                                            <td>
                                                <a href="{{ route('quizzes.show', [$course, $quiz]) }}">{{$quiz->title}}</a>
                                            </td>
                                            <td class="actions">
                                                <a href="{{ route('quizzes.edit', [$course, $quiz]) }}"
                                                   class="text-primary">Изменить</a>

                                                <form action="{{route('quizzes.destroy', [$course, $quiz])}}"
                                                      method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{route('quizzes.destroy', [$course, $quiz])}}"
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Экзамен будет удален. Продолжить?')){this.closest('form').submit();}">
                                                        Удалить
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>В курсе пока нет ни одного экзамена.</p>
                            @endif

                            <div class="d-flex justify-content-end mt-3">
                                <a href="{{route('quizzes.create', $course)}}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Добавить экзамен
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
