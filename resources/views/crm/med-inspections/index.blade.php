@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Медкомиссии')
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
                                <h2>Медкомиссии</h2>
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
                                                        <h5 class="mb-0">Медкомиссии</h5>
                                                        @can("manage medical")
                                                            <a href="{{route("crm.med-inspections.create", $employee)}}"
                                                               class="btn btn-success btn-sm">Добавить</a>
                                                        @endcan
                                                    </div>

                                                    @if($employee->medInspections->count())
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Плановый (дата прохождения)</th>
                                                                <th scope="col" class="text-start">Психиатр (дата
                                                                    прохождения)
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <tr @if($employee->isMedExpiresDate()) class="bg-danger text-light" @endif>
                                                                <td>
                                                                    {!! $employee->getLastMedInspection("common") !!}
                                                                    @can("manage medical")
                                                                        @if($employee->lastMedInspection("common"))
                                                                            <a href="{{route("crm.med-inspections.edit", $employee->lastMedInspection("common"))}}">
                                                                                <i class="fa fa-edit mx-2 d-inline-block"></i>
                                                                            </a>
                                                                            <form
                                                                                action="{{route('crm.med-inspections.destroy', $employee->lastMedInspection("common"))}}"
                                                                                method="POST" class="d-inline-block">
                                                                                @csrf @method('delete')

                                                                                <a title="Удалить"
                                                                                   href="{{route('crm.med-inspections.destroy', $employee->lastMedInspection("common"))}}"
                                                                                   class="mx-2"
                                                                                   onclick="event.preventDefault();if(confirm('Медкомиссия будет удалена. Продолжить?')){this.closest('form').submit();}">
                                                                                    <i class="fa fa-times"></i>
                                                                                </a>
                                                                            </form>
                                                                        @endif
                                                                    @endcan
                                                                </td>
                                                                <td>
                                                                    {!! $employee->getLastMedInspection("psych") !!}
                                                                    @can("manage medical")
                                                                        @if($employee->lastMedInspection("psych"))
                                                                            <a href="{{route("crm.med-inspections.edit", $employee->lastMedInspection("psych"))}}">
                                                                                <i class="fa fa-edit mx-2 d-inline-block"></i>
                                                                            </a>
                                                                            <form
                                                                                action="{{route('crm.med-inspections.destroy', $employee->lastMedInspection("psych"))}}"
                                                                                method="POST" class="d-inline-block">
                                                                                @csrf @method('delete')

                                                                                <a title="Удалить"
                                                                                   href="{{route('crm.med-inspections.destroy', $employee->lastMedInspection("psych"))}}"
                                                                                   class="mx-2"
                                                                                   onclick="event.preventDefault();if(confirm('Медкомиссия будет удалена. Продолжить?')){this.closest('form').submit();}">
                                                                                    <i class="fa fa-times"></i>
                                                                                </a>
                                                                            </form>
                                                                        @endif
                                                                    @endcan
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <p style="font-size: 16px;">Пока не пройдено ни одной
                                                            медкомиссии.</p>
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
