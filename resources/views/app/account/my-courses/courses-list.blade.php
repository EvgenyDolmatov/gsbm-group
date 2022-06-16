@extends('layouts.account')

@section('title', 'Мои курсы')
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
                                <h2>Мои курсы</h2>
                            </div>

                            @foreach($groups as $group)

                                <h4 class="mb-3 mt-3">{{$group->course->title}}</h4>

                                @if($group->course->lessons->count() > 0)
                                    <h5 class="mb-3 mt-5">Лекции</h5>
                                    <ul>
                                        @foreach($group->course->lessons as $key => $lesson)
                                            <li class="mt-2">
                                                <a href="{{route('account.lesson.show', $lesson)}}">{{$key+1 . ') ' .$lesson->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                                <h5 class="mb-3 mt-5">Тесты</h5>
                                <ul>
                                    @foreach($group->course->quizzes as $quiz)
                                        <li class="mt-2">
                                            <a href="{{route('account.choose-quiz', $quiz)}}"
                                               class="@if($quiz->isPassed()) text-success @endif">{{$quiz->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
