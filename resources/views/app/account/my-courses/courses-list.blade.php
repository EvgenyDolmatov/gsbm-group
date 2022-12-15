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
                    <div class="col-lg-7 col-12">
                        <div class="page-right-content">
                            <div class="service-title mb-5">
                                <h2>Мои курсы</h2>
                            </div>

                            @foreach($groups as $group)
                                <h4 class="mb-3">{{$group->course->title}}</h4>
                                @if($group->course->lessons->count() > 0)
                                    <h5 class="mb-3">Лекции</h5>
                                    <ul>
                                        @foreach($group->course->lessons as $lesson)
                                            <li class="mt-2">
                                                <a href="{{route('account.lesson.show', $lesson)}}">
                                                    {{$loop->index+1 . ') ' .$lesson->title}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="mt-3 mb-5">
                                        <a href="{{ route('account.course.practise', $group->course) }}"
                                           class="btn btn-outline-dark">Практика</a>
                                        @if($user->examAccess($group->course))
                                            <a href="{{route('account.choose-quiz', $group->course->getRandomQuiz())}}"
                                               class="btn btn-success">Сдать экзамен</a>
                                        @else
                                            <button class="btn btn-secondary" disabled>Экзамен не доступен</button>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
