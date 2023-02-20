@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Аттестация')
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
                                <h2>Аттестация</h2>
                            </div>

                            @if($employees->count())
                                <form action="" class="form-filter">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control shadow-none" name="surname_q"
                                               placeholder="Поиск по фамилии">
                                        <div class="input-group-append">
                                            <a href="#" class="btn btn-outline-brand"
                                               type="button">Сбросить</a>
                                            <button class="btn btn-brand" type="submit">Поиск</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="accordion" id="accordionUsers">
                                    @foreach($employees as $employee)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="{{ "heading" . $loop->index}}">
                                                <button class="accordion-button @if($loop->index != 0) collapsed @endif"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="{{ "#collapse" . $loop->index}}"
                                                        aria-expanded="@if($loop->index == 0) true @else false @endif"
                                                        aria-controls="{{ "collapse" . $loop->index}}">
                                                    {{$employee->getFullName()}}
                                                </button>
                                            </h2>
                                            <div id="{{ "collapse" . $loop->index}}"
                                                 class="accordion-collapse collapse @if($loop->index == 0) show @endif"
                                                 aria-labelledby="{{ "heading" . $loop->index}}"
                                                 data-bs-parent="#accordionUsers">
                                                <div class="accordion-body">
                                                    @include("crm.layouts.employee-info")

                                                    <div class="d-flex justify-content-between align-items-center my-4">
                                                        <h5 class="mb-0">Аттестация</h5>
                                                        @can("manage attestation")
                                                            <a href="{{route("crm.attestations.create", $employee)}}"
                                                               class="btn btn-success btn-sm">Добавить</a>
                                                        @endcan
                                                    </div>

                                                    @if($employee->attestations->count())
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Направление</th>
                                                                <th scope="col">Протокол</th>
                                                                <th scope="col" class="text-start">Удостоверение</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($employee->attestations as $attestation)
                                                                <tr @if($attestation->isExpiresDate()) class="bg-danger text-light" @endif>
                                                                    <td>{{$attestation->direction->name }}</td>
                                                                    <td>{!! $attestation->getLastDocByType("protocol") !!}</td>
                                                                    <td>{!! $attestation->getLastDocByType("certificate") !!}</td>
                                                                    <td class="d-flex">
                                                                        @can("manage attestation")
                                                                            <a href="{{route("crm.attestations.update", $attestation)}}">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                            <form
                                                                                action="{{route('crm.attestations.destroy', $attestation)}}"
                                                                                method="POST">
                                                                                @csrf @method('delete')

                                                                                <a title="Удалить" href="{{route('crm.attestations.destroy', $attestation)}}"
                                                                                   class="mx-2"
                                                                                   onclick="event.preventDefault();if(confirm('Направление будет удалено. Продолжить?')){this.closest('form').submit();}">
                                                                                    <i class="fa fa-times"></i>
                                                                                </a>
                                                                            </form>
                                                                        @endcan
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <p style="font-size: 16px;">Пока нет ни одной аттестации.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-4">Пока нет ни одного сотрудника.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
