@extends('layouts.account')

@section('title', 'Изменение пароля')
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
                                <h2>Изменение пароля</h2>
                            </div>

                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ __(session('status')) }}
                                </div>
                            @endif

                            <form action="{{route('account.password.update')}}" method="POST" class="account-form">
                                @csrf @method('PUT')

                                <div class="form-group mb-4">
                                    <label for="current_password" class="form-label">Текущий пароль</label>
                                    <input type="password" id="current_password" class="form-control"
                                           name="current_password">
                                    @if(session('errorMsg'))
                                        <small class="mt-2 text-danger">{{ session('errorMsg') }}</small>
                                    @else
                                        @error('current_password')
                                        <small class="mt-2 text-danger">{{ __($message) }}</small>
                                        @enderror
                                    @endif
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password" class="form-label">Новый пароль</label>
                                    <input type="password" id="password" class="form-control" name="password">
                                    @error('password')
                                    <small class="mt-2 text-danger">{{ __($message) }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password_confirmation" class="form-label">Повторите пароль</label>
                                    <input type="password" id="password_confirmation" class="form-control"
                                           name="password_confirmation">
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
