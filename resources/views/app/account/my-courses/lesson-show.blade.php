@extends('layouts.account')

@section('title', $lesson->title)
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
                                <h2>{{$lesson->title}}</h2>
                            </div>

                            {!! $lesson->content !!}

                            @if($lesson->attachments()->count() > 0)
                                <h3 class="mt-5 mb-3">Дополнительные материалы</h3>
                                <ul class="files mb-5">
                                    @foreach($lesson->attachments as $key => $file)
                                        <li class="mb-2">
                                            <a href="{{$file->getFile()}}"
                                               target="_blank">{{$key+1 . ') ' . $file->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            @if(session()->has("lessonPassed"))
                                <div class="alert alert-success d-flex justify-content-between align-items-center">
                                    <span>{{ session()->get("lessonPassed") }}</span>
                                    @if($lesson->relatedQuizzes->count())
                                        <a href="{{route('account.choose-quiz', $lesson->relatedQuizzes->first())}}"
                                           class="btn btn-success">Сдать тест</a>
                                    @endif
                                </div>
                            @endif

                            @if(! $user->results->where("stage_id", $lesson->stage->id)->first())
                                <a href="{{route('account.course.pass-lesson', $lesson)}}" class="btn btn-brand">Лекция
                                    изучена</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
