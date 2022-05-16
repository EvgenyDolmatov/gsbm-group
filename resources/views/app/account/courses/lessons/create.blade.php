@extends('layouts.account')

@section('title', $course->title . ': Новая лекция')
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
                                <h2>Новая лекция</h2>
                            </div>

                            <form action="{{route('lessons.store', $course)}}" method="POST" class="account-form" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="title" class="form-label">Название лекции</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                           value="{{old('title')}}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="content" class="form-label">Контент</label>
                                    <textarea name="content" id="content" rows="6"
                                              class="form-control">{!! old('content') !!}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="files" class="form-label">Файлы</label>
                                    <input type="file" name="files[]" id="files" class="form-control" multiple>
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

@section('additional-scripts')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function (){
            CKEDITOR.replace('content');
        });
    </script>
@endsection
