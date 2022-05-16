@extends('layouts.account')

@section('title', $leader->getFullName() . ' (ред.)')
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
                                <h2>{{$leader->getFullName() . ' (ред.)'}}</h2>
                            </div>

                            <form action="{{route('leaders.update', $leader)}}" method="POST" class="account-form"
                                  enctype="multipart/form-data">
                                @csrf @method('PUT')

                                {{-- Фамилия и имя --}}
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="surname" class="form-label">Фамилия</label>
                                            <input type="text" id="surname" class="form-control" name="surname"
                                                   value="{{old('surname', $leader->surname)}}">
                                            @error('surname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="name" class="form-label">Имя</label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                   value="{{old('name', $leader->name)}}">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Телефон и email --}}
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label">Телефон</label>
                                            <input type="text" id="phone" class="form-control" name="phone"
                                                   value="{{old('phone', $leader->phone)}}">
                                            @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" id="email" class="form-control" name="email"
                                                   value="{{old('email', $leader->email)}}">
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Направление и должность --}}
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="name" class="form-label">Направление</label>
                                            <select name="service_id" class="form-control form-select">
                                                <option value="" selected disabled>Выберите направление</option>
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}"
                                                            @if($service->id==old('service_id', $leader->service_id)) selected @endif>
                                                        {{$service->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('service_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="position" class="form-label">Должность</label>
                                            <input type="text" id="position" class="form-control" name="position"
                                                   value="{{old('position', $leader->position)}}">
                                            @error('position')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Фотография --}}
                                <div class="form-group mb-5">
                                    <label for="photo" class="form-label">Фотография</label>

                                    @if($leader->photo)
                                        <div class="d-flex justify-content-start mb-3">
                                            <div class="img-thumbnail">
                                                <a href="{{route('ajax.leaders.remove-photo', $leader)}}"
                                                   class="remove">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <img src="{{$leader->getPhoto()}}" alt="{{$leader->title}}">
                                            </div>
                                        </div>
                                    @endif

                                    <input type="file" name="photo" id="photo" class="form-control">
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
