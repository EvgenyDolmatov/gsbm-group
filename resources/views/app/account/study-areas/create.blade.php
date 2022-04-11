@extends('layouts.account')

@section('title', 'Новое направление')
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
                                <h2>Новое направление</h2>
                            </div>

                            <form action="{{route('directions.store')}}" method="POST" class="account-form">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="name" class="form-label">Название напраления</label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}">
                                    @error('name')
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
