@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Направления')
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
                                <h2>Направления</h2>
                            </div>
                            <a href="{{route('crm.directions.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить
                            </a>

                            @if($directions->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Направление</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($directions as $direction)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$direction->name}}</td>
                                            <td class="actions">
                                                <a href="{{ route("crm.directions.edit", $direction) }}"
                                                   class="text-primary">Изменить</a>

                                                <form
                                                    action="{{route("crm.directions.destroy", $direction)}}"
                                                    method="POST">
                                                    @csrf @method('DELETE')

                                                    <a href="{{route("crm.directions.destroy", $direction)}}"
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Направление будет удалено. Продолжить?')){this.closest('form').submit();}">
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
                                    @foreach($directions as $key => $direction)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params code">
                                                    <span class="title">№</span>
                                                    <span class="value">{{$key+1}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Направление</span>
                                                    <span class="value">{{$direction->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-4">У Вас пока нет ни одного направления.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
