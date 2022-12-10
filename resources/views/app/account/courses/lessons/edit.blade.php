@extends('layouts.account')

@section('title', $lesson->title . ' (ред.)')
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
                                <h2>{{$lesson->title . ' (ред.)'}}</h2>
                            </div>

                            <form action="{{route('lessons.update', [$course, $lesson])}}" method="POST"
                                  class="account-form"
                                  enctype="multipart/form-data">
                                @csrf @method('PUT')

                                <div class="form-group mb-5">
                                    <label for="course_id" class="form-label">Курс</label>
                                    <select name="course_id" id="course_id" class="form-control form-select w-100">
                                        <option value="" selected disabled>Выберите курс</option>
                                        @foreach($courses->sortBy("title") as $c)
                                            <option value="{{$c->id}}"
                                                    @if($c->id == old('course_id') || $c->id == $lesson->course->id) selected @endif>
                                                {{$c->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('course_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="title" class="form-label">Название лекции</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                           value="{{old('title', $lesson->title)}}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="content" class="form-label">Контент</label>
                                    <textarea name="content" id="content" rows="6"
                                              class="form-control">{!! old('content', $lesson->content) !!}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="files" class="form-label">Файлы</label>

                                    <ul class="mb-3">
                                        @foreach($lesson->attachments as $key => $attachment)
                                            <li class="item-file">
                                                <a href="{{ $attachment->getFile() }}" target="_blank">
                                                    {{ $attachment->title }}
                                                </a>
                                                <a href="{{route('ajax.lessons.remove-file', $attachment)}}"
                                                   class="remove-file text-danger" style="margin-left:10px">Удалить</a>
                                            </li>
                                        @endforeach
                                    </ul>

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
        $(document).ready(function () {
            CKEDITOR.replace('content');
        });
    </script>
@endsection
