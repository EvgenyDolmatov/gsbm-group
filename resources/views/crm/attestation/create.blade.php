@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Добавить документ')
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
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="page-right-content">
                            <div class="service-title d-flex justify-content-between align-items-center">
                                <h2>{{$employee->getFullName() . ' (новый документ)'}}</h2>
                            </div>

                            <form action="{{route("crm.attestations.store", $employee)}}" method="POST"
                                  class="account-form">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="form-group mb-5">
                                            <label for="direction_id" class="form-label">Направление обучения</label>
                                            <select name="direction_id" id="direction_id"
                                                    class="form-select shadow-none">
                                                <option value="" selected disabled>Выберите направление</option>
                                                @foreach($directions as $direction)
                                                    <option value="{{$direction->id}}"
                                                            @if($direction->id==old("direction_id")) selected @endif>
                                                        {{$direction->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('direction_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="mb-4">Протокол</h4>
                                <div class="row mb-4">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="protocol_number" class="form-label">Номер *</label>
                                            <input type="text" id="protocol_number" class="form-control shadow-none"
                                                   name="protocol_number"
                                                   value="{{old('protocol_number')}}">
                                            @error('protocol_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="protocol_valid_from" class="form-label">Дата выдачи *</label>
                                            <input type="date" id="protocol_valid_from" class="form-control shadow-none"
                                                   name="protocol_valid_from"
                                                   value="{{old('protocol_valid_from')}}">
                                            @error('protocol_valid_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="protocol_valid_to" class="form-label">Действителен до *</label>
                                            <input type="date" id="protocol_valid_to" class="form-control shadow-none"
                                                   name="protocol_valid_to"
                                                   value="{{old('protocol_valid_to')}}">
                                            @error('protocol_valid_to')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <h4 class="mb-4">Свидетельство (удостоверение)</h4>
                                <div class="row mb-4">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="certificate_number" class="form-label">Номер</label>
                                            <input type="text" id="certificate_number" class="form-control shadow-none"
                                                   name="certificate_number"
                                                   value="{{old('certificate_number')}}">
                                            @error('certificate_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="certificate_valid_from" class="form-label">Дата выдачи</label>
                                            <input type="date" id="certificate_valid_from"
                                                   class="form-control shadow-none"
                                                   name="certificate_valid_from"
                                                   value="{{old('certificate_valid_from')}}">
                                            @error('certificate_valid_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="certificate_valid_to" class="form-label">Действителен до</label>
                                            <input type="date" id="certificate_valid_to"
                                                   class="form-control shadow-none"
                                                   name="certificate_valid_to"
                                                   value="{{old('certificate_valid_to')}}">
                                            @error('certificate_valid_to')
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
