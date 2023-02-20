@extends('layouts.account')

@section('title', 'Добавление СИЗ')
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.crm-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>Добавление СИЗ</h2>
                            </div>

                            <form action="{{route("crm.inventory.store")}}" method="POST" class="account-form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-9 col-12">
                                        <div class="form-group mb-5">
                                            <label for="name" class="form-label">Наименование</label>
                                            <input type="text" id="name" class="form-control shadow-none" name="name"
                                                   value="{{old('name')}}">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group mb-5">
                                            <label for="quantity" class="form-label">Количество</label>
                                            <input type="number" id="quantity" class="form-control shadow-none" name="quantity"
                                                   value="{{old('quantity', 1)}}">
                                            @error('quantity')
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
