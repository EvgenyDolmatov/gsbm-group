@extends('layouts.account')

@section('title', 'Новая услуга')
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
                                <h2>Новая услуга</h2>
                            </div>

                            <form action="{{route('services.store')}}" method="POST" class="account-form" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="title" class="form-label">Название услуги</label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{old('title')}}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="description" class="form-label">Описание услуги</label>
                                    <textarea name="description" id="description" rows="4" class="form-control">{!! old('description') !!}</textarea>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="images" class="form-label">Фотографии</label>
                                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="images_before" class="form-label">Фотографии (было до)</label>
                                    <input type="file" name="images_before[]" id="images_before" class="form-control" multiple>
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
