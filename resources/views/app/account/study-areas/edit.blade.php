@extends('layouts.account')

@section('title', $area->name . '(ред.)')
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
                                <h2>{{$area->name . '(ред.)'}}</h2>
                            </div>

                            <form action="{{route('directions.update', $area)}}" method="POST" class="account-form">
                                @csrf @method('PUT')

                                <div class="form-group mb-5">
                                    <label for="name" class="form-label">Название напраления</label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{old('name', $area->name)}}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
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
