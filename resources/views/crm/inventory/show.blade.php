@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - ' . $item->name)
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
                                <h2 class="mb-0">{{ $item->name }}</h2>
                                <p class="mb-0">Остаток: {{$item->quantity . " шт"}}</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="{{route('crm.inventory.schedule.create', $item)}}" class="btn btn-success"
                                   style="margin-right: 10px;">
                                    <i class="fa fa-plus"></i> Добавить норму
                                </a>
                                <a href="{{route('crm.inventory.add-qty', $item)}}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Приход
                                </a>
                            </div>

                            @if($item->limitSchedules->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Профессия</th>
                                        <th scope="col" style="width: 180px">Кол-во / период</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($item->limitSchedules as $schedule)
                                        <tr>
                                            <td>{{$schedule->profession->name}}</td>
                                            <td class="text-center">{{$schedule->rate_per_year . " ед. / " . $schedule->period . " мес"}}</td>
                                            <td class="actions">
                                                <a href="{{ route("crm.inventory.schedule.edit", [$item, $schedule]) }}"
                                                   class="text-primary">Изменить</a>

                                                <form
                                                    action="{{ route("crm.inventory.schedule.destroy", [$item, $schedule]) }}"
                                                    method="POST">
                                                    @csrf @method('DELETE')

                                                    <a href=""
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Норма выдачи будет удалена. Продолжить?')){this.closest('form').submit();}">
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
                                    @foreach($item->limitSchedules as $schedule)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params code">
                                                    <span class="title">№</span>
                                                    <span class="value">{{$loop->index +1}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Профессия</span>
                                                    <span class="value">{{$schedule->profession->name}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Количество/год</span>
                                                    <span class="value">{{$schedule->rate_per_year}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="mt-4">У Вас пока не задано нормы выдачи.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
