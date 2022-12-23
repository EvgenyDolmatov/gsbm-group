@extends('layouts.account')

@section('title', $course->title . ". Практика")
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
                            <div class="service-title">
                                <h2>{{ $course->title . ". Практика" }}</h2>
                            </div>

                            <div>
                                <a href="{{ route('account.my-courses') }}" class="btn btn-outline-dark">Мои курсы</a>
                            </div>

                            <h5 class="mb-3 mt-5">Тесты</h5>
                            <ul>
                                @foreach($course->quizzes as $quiz)
                                    <li class="mt-2">
                                        @if($quiz->isAvailableByUser())
                                            <a href="{{route('account.quizzes.show', $quiz)}}"
                                               class="@if($quiz->isPassed()) text-success @endif">
                                                {{$quiz->title}}
                                            </a>
                                        @else
                                            <span>
                                                {{$quiz->title}}
                                                <i class="text-danger" style="font-size: 14px;">[не доступно, прочтите лекции]</i>
                                            </span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
