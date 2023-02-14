@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Сотрудники')
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
                                <h2>Сотрудники</h2>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('crm.employees.create') }}" class="btn btn-success">
                                        <i class="fa fa-plus"></i> Новый сотрудник</a>
                                </div>
                            </div>

                            @if($employees->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Профессия</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $emp)
                                        <tr>
                                            <td>{{$emp->getFullName()}}</td>
                                            <td>{{$emp->getProfession()}}</td>
                                            <td class="actions">
                                                <a href="{{ route('crm.employees.edit', $emp) }}"
                                                   class="text-primary">Изменить</a>

                                                <form
                                                    action="{{ route('crm.employees.destroy', $emp) }}"
                                                    method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{ route('crm.employees.destroy', $emp) }}"
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Сотрудник будет удален. Продолжить?')){this.closest('form').submit();}">
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
                                    @foreach($employees as $key => $emp)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params code">
                                                    <span class="title">№</span>
                                                    <span class="value">{{$key+1}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">ФИО</span>
                                                    <span class="value">{{$emp->getFullName()}}</span>
                                                </div>
                                            </div>
                                            <div class="item-value description pt-2">
                                                <p style="margin-bottom: 0">
                                                    {{ "Профессия: " . $emp->getProfession() }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-4">У Вас пока нет ни одного сотрудника.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
