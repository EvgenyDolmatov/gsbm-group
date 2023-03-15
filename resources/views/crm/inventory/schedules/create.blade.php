@extends('layouts.account')

@section('title', 'Добавление нормы выдачи для ' . $item->name)
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
                    <div class="col-lg-8 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>{{ $item->name . ' - добавить норму выдачи' }}</h2>
                            </div>

                            <form action="{{route("crm.inventory.schedule.store", $item)}}" method="POST" class="account-form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <div class="form-group mb-5">
                                            <label for="profession_id" class="form-label">Профессия</label>
                                            <select name="profession_id" id="profession_id"
                                                    class="form-select shadow-none">
                                                <option value="" selected>Выберите профессию</option>
                                                @foreach($professions as $prof)
                                                    <option value="{{$prof->id}}"
                                                            @if($prof->id==old("profession_id")) selected @endif>
                                                        {{$prof->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('profession_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group mb-5">
                                            <label for="rate_per_year" class="form-label">Кол-во</label>
                                            <input type="number" id="rate_per_year" class="form-control shadow-none"
                                                   name="rate_per_year"
                                                   value="{{old('rate_per_year', 1)}}">
                                            @error('rate_per_year')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group mb-5">
                                            <label for="period" class="form-label">Период, мес</label>
                                            <input type="text" id="period" class="form-control shadow-none"
                                                   name="period"
                                                   value="{{old('period', 12)}}">
                                            @error('period')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
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
