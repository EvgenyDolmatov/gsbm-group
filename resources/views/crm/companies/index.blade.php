@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Компании')
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
                                <h2>{{'Компании'}}</h2>
                            </div>
                            <a href="{{route('crm.companies.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить
                            </a>

                            @if($companies->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Компания</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $company)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$company->name}}</td>
                                            <td class="actions">
                                                <a href="{{ route("crm.companies.edit", $company) }}"
                                                   class="text-primary">Изменить</a>

                                                <form
                                                    action="{{route("crm.companies.destroy", $company)}}"
                                                    method="POST">
                                                    @csrf @method('DELETE')

                                                    <a href="{{route("crm.companies.destroy", $company)}}"
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Компания будет удалена. Продолжить?')){this.closest('form').submit();}">
                                                        Удалить
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <!-- Table for mobile -->
                                <div class="table-flex">
                                    @foreach($companies as $key => $company)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params code">
                                                    <span class="title">№</span>
                                                    <span class="value">{{$key+1}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Компания</span>
                                                    <span class="value">{{$company->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-4">У Вас пока нет ни одной компании.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
