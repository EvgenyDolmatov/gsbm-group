@extends('layouts.account')

@section('title', 'Новая группа')
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
                                <h2>Новая группа</h2>
                            </div>

                            <form action="{{route('study-groups.store')}}" method="POST" class="account-form" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="name" class="form-label">Название группы</label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="select-custom mb-5">
                                    <label for="course_id">Курс</label>
                                    <select name="course_id" id="course_id" class="form-control form-input">
                                        <option value="" selected disabled>Выберите курс</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}"
                                                    @if($course->id==old('course_id')) selected @endif>
                                                {{ $course->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('course_id')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-brand btn-filled mb-3">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additional-scripts')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function (){
            CKEDITOR.replace('description');
        });
    </script>
@endsection
