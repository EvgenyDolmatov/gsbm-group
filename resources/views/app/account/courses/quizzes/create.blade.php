@extends('layouts.account')

@section('title', $course->title . ': Новый экзамен')
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
                                <h2>Новый экзамен</h2>
                            </div>

                            <form action="{{route('quizzes.store', $course)}}" method="POST" class="account-form">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="title" class="form-label">Название экзамена</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                           value="{{old('title')}}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="description" class="form-label">Описание экзамена</label>
                                    <textarea name="description" id="description" rows="6"
                                              class="form-control">{{old('description')}}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-brand btn-filled mb-3">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
