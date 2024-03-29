@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - ' . $attestation->employee->getFullName() . " (редактирование документов)")
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
                                <h2>{{$attestation->employee->getFullName() . " (редактирование документов)"}}</h2>
                            </div>

                            <form action="{{route("crm.attestations.update", $attestation)}}" method="POST"
                                  class="account-form">
                                @csrf @method('PUT')

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="form-group mb-5">
                                            <label for="direction_id" class="form-label">Направление обучения</label>
                                            <select name="direction_id" id="direction_id"
                                                    class="form-select shadow-none" disabled>
                                                <option value="" selected disabled>Выберите направление</option>
                                                @foreach($directions as $d)
                                                    <option value="{{$d->id}}"
                                                            @if($d->id==old("direction_id", $attestation->direction->id)) selected @endif>
                                                        {{$d->name}}
                                                    </option>
                                                @endforeach
                                            </select>
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
                                                   value="{{old('protocol_number', $attestation->lastDocumentByType("protocol")->doc_number)}}">
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
                                                   value="{{old('protocol_valid_from', $attestation->lastDocumentByType("protocol")->valid_from)}}">
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
                                                   value="{{old('protocol_valid_to', $attestation->lastDocumentByType("protocol")->valid_to)}}">
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
                                                   value="@if($attestation->lastDocumentByType("certificate")){{old('certificate_number', $attestation->lastDocumentByType("certificate")->doc_number)}}@else{{old('certificate_number')}}@endif">
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
                                                   value="@if($attestation->lastDocumentByType("certificate")){{old('certificate_valid_from', $attestation->lastDocumentByType("certificate")->valid_from)}}@else{{old('certificate_valid_from')}}@endif">
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
                                                   value="@if($attestation->lastDocumentByType("certificate")){{old('certificate_valid_to', $attestation->lastDocumentByType("certificate")->valid_to)}}@else{{old('certificate_valid_to')}}@endif">
                                            @error('certificate_valid_to')
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
