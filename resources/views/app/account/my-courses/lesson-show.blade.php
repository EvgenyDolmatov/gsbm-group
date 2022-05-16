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
                                <ul class="files ">
                                    @foreach($lesson->attachments as $key => $file)
                                        <li class="mb-2">
                                            <a href="{{$file->getFile()}}" target="_blank">{{$key+1 . ') ' . $file->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
