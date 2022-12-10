@extends('layouts.account')

@section('title', 'Новый студент')
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
                                <h2>Новый студент</h2>
                            </div>

                            <form action="{{route('students.store')}}" method="POST" class="account-form">
                                @csrf

                                {{-- Student Surname --}}
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="surname" class="form-label">Фамилия</label>
                                            <input type="text" id="surname" class="form-control" name="surname" value="{{old('surname')}}">
                                            @error('surname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Student Name --}}
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="name" class="form-label">Имя</label>
                                            <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Student Middle Name --}}
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="middle_name" class="form-label">Отчество</label>
                                            <input type="text" id="middle_name" class="form-control" name="middle_name" value="{{old('middle_name')}}">
                                            @error('middle_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Student Phone --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="phone" class="form-label">Телефон</label>
                                            <input type="text" id="phone" class="form-control" name="phone" value="{{old('phone')}}">
                                            @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Student Email --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" id="email" class="form-control" name="email" value="{{old('email')}}">
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
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
