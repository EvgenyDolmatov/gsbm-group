@extends('layouts.account')

@section('title', 'Личные данные')
@section('main-tag-class', 'page education')
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
                                <h2>Личные данные</h2>
                            </div>

                            @if(Session::has('status'))
                                <div class="alert alert-success">
                                    {{ __(Session::get('status')) }}
                                </div>
                            @endif

                            <form action="{{ route('account.update') }}" method="POST" class="account-form">
                                @csrf @method('PUT')

                                <div class="form-group mb-4">
                                    <label for="surname" class="form-label">Фамилия</label>
                                    <input type="text" id="surname" name="surname" class="form-control"
                                           value="{{old('surname', $user->surname)}}">
                                    @error('surname')
                                    <small class="text-danger">{{ __($message) }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="name" class="form-label">Имя</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="{{old('name', $user->name)}}">
                                    @error('name')
                                    <small class="text-danger">{{ __($message) }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                           value="{{old('email', $user->email)}}">
                                    @error('email')
                                    <small class="text-danger">{{ __($message) }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="phone" class="form-label">Телефон</label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                           value="{{old('phone', $user->phone)}}">
                                    @error('phone')
                                    <small class="text-danger">{{ __($message) }}</small>
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
