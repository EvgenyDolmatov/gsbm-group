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

                            <form action="{{route("crm.attestation.store", $employee)}}" method="POST"
                                  class="account-form">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-5">
                                            <label for="study_area_id" class="form-label">Направление обучения</label>
                                            <select name="study_area_id" id="study_area_id"
                                                    class="form-select shadow-none">
                                                <option value="" selected disabled>Выберите направление</option>
                                                @foreach($studyAreas as $studyArea)
                                                    <option value="{{$studyArea->id}}"
                                                            @if($studyArea->id==old("study_area_id")) selected @endif>
                                                        {{$studyArea->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('study_area_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="type" class="form-label">Тип документа</label>
                                            <select name="type" id="type"
                                                    class="form-select shadow-none">
                                                <option value="" selected disabled>Выберите тип документа</option>
                                                <option value="protocol"
                                                        @if(old("type")=="protocol") selected @endif>
                                                    Протокол
                                                </option>
                                                <option value="certificate"
                                                        @if(old("type")=="certificate") selected @endif>
                                                    Удостоверение
                                                </option>
                                            </select>
                                            @error('type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="number" class="form-label">Номер документа</label>
                                            <input type="text" id="number" class="form-control shadow-none" name="number"
                                                   value="{{old('number')}}">
                                            @error('number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="valid_from" class="form-label">Дата выдачи</label>
                                            <input type="date" id="valid_from" class="form-control shadow-none" name="valid_from"
                                                   value="{{old('valid_from')}}">
                                            @error('valid_from')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-5">
                                            <label for="valid_to" class="form-label">Действителен до</label>
                                            <input type="date" id="valid_to" class="form-control shadow-none" name="valid_to"
                                                   value="{{old('valid_to')}}">
                                            @error('valid_to')
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
