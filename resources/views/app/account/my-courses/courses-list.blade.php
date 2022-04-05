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

                            <h4 class="mb-3 mt-3">{{$course->title}}</h4>
                            <ul>
                                @foreach($course->quizzes as $quiz)
                                    <li class="mt-2">
                                        <a href="{{route('account.choose-quiz', $quiz)}}"
                                           class="@if($quiz->isPassed()) text-success @endif">{{$quiz->title}}</a>
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
