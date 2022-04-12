@extends('layouts.account')

@section('title', $quiz->title . ' (ред.)')
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
                                <h2>{{  $quiz->title . ' (ред.)' }}</h2>
                            </div>

                            <form action="{{route('quizzes.update', [$course, $quiz])}}" method="POST" class="account-form">
                                @csrf @method('PUT')

                                <div class="form-group mb-5">
                                    <label for="course_id" class="form-label">Курс</label>
                                    <select name="course_id" id="course_id" class="form-control form-select w-100">
                                        <option value="" selected disabled>Выберите курс</option>
                                        @foreach($courses as $c)
                                            <option value="{{$c->id}}"
                                                    @if($c->id == old('course_id') || $c->id == $quiz->course->id) selected @endif>
                                                {{$c->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('course_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="title" class="form-label">Название экзамена</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                           value="{{old('title', $quiz->title)}}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="description" class="form-label">Описание экзамена</label>
                                    <textarea name="description" id="description" rows="6"
                                              class="form-control">{{old('description', $quiz->description)}}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Save Button --}}
                                @include('components.form-save-btn')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
