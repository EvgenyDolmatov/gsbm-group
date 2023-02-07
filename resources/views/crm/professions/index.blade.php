@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Профессии')
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
                                <h2>{{'Профессии'}}</h2>
                            </div>
                            <a href="{{route('crm.professions.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить
                            </a>

                            @if($professions->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Профессия</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($professions as $profession)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$profession->name}}</td>
                                            <td class="actions">
                                                <a href="{{ route("crm.professions.edit", $profession) }}"
                                                   class="text-primary">Изменить</a>

                                                <form
                                                    action="{{route("crm.professions.destroy", $profession)}}"
                                                    method="POST">
                                                    @csrf @method('DELETE')

                                                    <a href=""
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Профессия будет удалена. Продолжить?')){this.closest('form').submit();}">
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
                                    @foreach($professions as $key => $profession)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params code">
                                                    <span class="title">№</span>
                                                    <span class="value">{{$key+1}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Профессия</span>
                                                    <span class="value">{{$profession->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-4">У Вас пока нет ни одной профессии.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
