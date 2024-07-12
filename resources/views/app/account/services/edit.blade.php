@extends('layouts.account')

@section('title', $service->title . ' (ред.)')
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
                                <h2>{{$service->title . ' (ред.)'}}</h2>
                            </div>

                            <form action="{{route('services.update', $service)}}" method="POST" class="account-form"
                                  enctype="multipart/form-data">
                                @csrf @method('PUT')

                                <div class="form-group mb-5">
                                    <label for="title" class="form-label">Название услуги</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                           value="{{old('title', $service->title)}}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="description" class="form-label">Описание услуги</label>
                                    <textarea name="description" id="description" rows="4"
                                              class="form-control">{!! old('description', $service->description) !!}</textarea>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="images" class="form-label">Фотографии</label>

                                    <div class="d-flex justify-content-start mb-3">
                                        @foreach($service->images->where('is_before', false) as $image)
                                            <div class="img-thumbnail">
                                                <a href="{{route('ajax.remove-image', $image)}}" class="remove"><i class="fa fa-plus"></i></a>
                                                <img src="{{$image->getImage()}}" alt="{{$service->title}}">
                                            </div>
                                        @endforeach
                                    </div>

                                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="images" class="form-label">Фотографии (было до)</label>

                                    <div class="d-flex justify-content-start mb-3">
                                        @foreach($service->images->where('is_before', true) as $image)
                                            <div class="img-thumbnail">
                                                <a href="{{route('ajax.remove-image', $image)}}" class="remove"><i class="fa fa-plus"></i></a>
                                                <img src="{{$image->getImage()}}" alt="{{$service->title}}">
                                            </div>
                                        @endforeach
                                    </div>

                                    <input type="file" name="images_before[]" id="images_before" class="form-control" multiple>
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
            CKEDITOR.replace('description');
        });
    </script>
@endsection
