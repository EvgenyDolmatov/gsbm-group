@extends('layouts.account')

@section('title', 'Новый курс')
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
                                <h2>Новый курс</h2>
                            </div>

                            <form action="{{route('courses.store')}}" method="POST" class="account-form">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="study_area_id" class="form-label">Направление</label>
                                    <select name="study_area_id" id="study_area_id" class="form-select w-100">
                                        <option value="" selected disabled>Выберите направление</option>
                                        @foreach($studyAreas as $area)
                                            <option value="{{$area->id}}"
                                                    @if($area->id == old('study_area_id')) selected @endif>
                                                {{$area->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('study_area_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="title" class="form-label">Название курса</label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{old('title')}}">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="description" class="form-label">Описание курса</label>
                                    <textarea name="description" id="description" rows="4" class="form-control">{!! old('description') !!}</textarea>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="price" class="form-label">Цена курса</label>
                                    <input type="number" id="price" class="form-control" name="price" value="{{old('price')}}">
                                    @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
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
