@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Средства индивидуальной защиты')
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
                                <h2>Средства индивидуальной защиты</h2>
                            </div>
                            @can("manage inventory")
                                <a href="{{route('crm.inventory.create')}}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Добавить
                                </a>
                            @endcan

                            @if($invItems->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Кол-во</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($invItems as $item)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>
                                                <a href="{{route('crm.inventory.show', $item)}}">
                                                    {{$item->name}}
                                                </a>
                                            </td>
                                            <td>{{$item->quantity}}</td>
                                            <td class="actions">
                                                @can("manage inventory")
                                                    <a href="{{route('crm.inventory.show', $item)}}"
                                                       class="text-success">Приход</a>
                                                    <a href="{{ route("crm.inventory.edit", $item) }}"
                                                       class="text-primary">Изменить</a>

                                                    <form
                                                        action="{{route("crm.inventory.destroy", $item)}}"
                                                        method="POST">
                                                        @csrf @method('DELETE')

                                                        <a href=""
                                                           class="text-danger"
                                                           onclick="event.preventDefault();if(confirm('СИЗ будет удален. Продолжить?')){this.closest('form').submit();}">
                                                            Удалить
                                                        </a>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <!-- Table for mobile -->
                                <div class="table-flex">
                                    @foreach($invItems as $key => $item)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params code">
                                                    <span class="title">№</span>
                                                    <span class="value">{{$key+1}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Наименование СИЗ</span>
                                                    <span class="value">{{$item->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-4">У Вас пока нет ни одного средства индивидуальной защиты.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
