@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - ' . $medInspection->employee->getFullName() . " (редактирование медкомиссии)")
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
                                <h2>{{$medInspection->employee->getFullName() . " (редактирование медкомиссии)"}}</h2>
                            </div>

                            <form action="{{route("crm.med-inspections.update", $medInspection)}}" method="POST"
                                  class="account-form">
                                @csrf @method('PUT')

                                <div class="row mb-4">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="type" class="form-label">Тип осмотра</label>
                                            <select name="type" id="type" class="form-select shadow-none" disabled>
                                                <option value="common" @if("common"==old("type", $medInspection->type)) selected @endif>
                                                    Плановый осмотр
                                                </option>
                                                <option value="psych" @if("psych"==old("type", $medInspection->type)) selected @endif>
                                                    Психиатрический осмотр
                                                </option>
                                            </select>
                                            @error('type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="inspection_date" class="form-label">Дата прохождения *</label>
                                            <input type="date" id="inspection_date"
                                                   class="form-control shadow-none"
                                                   name="inspection_date"
                                                   value="{{old('inspection_date', $medInspection->inspection_date)}}">
                                            @error('inspection_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="next_inspection_date" class="form-label">Дата следующей
                                                комиссии</label>
                                            <input type="date" id="next_inspection_date"
                                                   class="form-control shadow-none"
                                                   name="next_inspection_date"
                                                   value="{{old('next_inspection_date', $medInspection->next_inspection_date)}}">
                                            @error('next_inspection_date')
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
