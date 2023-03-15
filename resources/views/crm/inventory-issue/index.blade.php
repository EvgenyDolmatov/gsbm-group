@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Выдача СИЗ')
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
                                <h2>Выдача СИЗ</h2>
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
                                                        <h5 class="mb-0">Выданные СИЗ</h5>
                                                        @can("manage inventory")
                                                            <a href="{{ route("crm.inventory-issue.create", $employee) }}"
                                                               class="btn btn-success btn-sm">Выдать</a>
                                                        @endcan
                                                    </div>

                                                    @if($employee->issuedInventoryItems->count())
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">СИЗ</th>
                                                                <th scope="col" class="text-start">Выдано,<br>ед
                                                                </th>
                                                                <th scope="col" class="text-start">Норма выдачи,<br>ед/год
                                                                </th>
                                                                <th scope="col" class="text-start">
                                                                    Дата выдачи
                                                                </th>
                                                                <th scope="col" class="text-start">
                                                                    Дата следующей выдачи
                                                                </th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($items as $item)
                                                                @if($employee->getLastIssueByItem($item))
                                                                    <tr class="@if($employee->getLastIssueByItem($item)->isExpiresDays()) bg-danger text-light @endif">
                                                                        <td>{{ $item->name }}</td>
                                                                        <td>
                                                                            {{ $employee->getLastIssueQtyByItem($item) }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $employee->getQtyItemsByInventory($item) . " / " .$item->getLimitByProf($employee->profession) }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $employee->getLastIssueByItem($item)->getIssueDate() }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $employee->getLastIssueByItem($item)->getNextIssueDate() }}
                                                                        </td>
                                                                        <td class="d-flex">
                                                                            <a href="{{ route("crm.inventory-issue.edit", [$employee, $employee->getLastIssueByItem($item)]) }}">
                                                                                <i class="fa fa-edit mx-2 d-inline-block"></i>
                                                                            </a>
                                                                            <form
                                                                                action="{{route('crm.inventory-issue.destroy', [$employee, $employee->getLastIssueByItem($item)])}}"
                                                                                method="POST" class="d-inline-block">
                                                                                @csrf @method('delete')

                                                                                <a title="Удалить"
                                                                                   href="{{route('crm.inventory-issue.destroy', [$employee, $employee->getLastIssueByItem($item)])}}"
                                                                                   class="mx-2"
                                                                                   onclick="event.preventDefault();if(confirm('Выдача будет аннулирована. Продолжить?')){this.closest('form').submit();}">
                                                                                    <i class="fa fa-times"></i>
                                                                                </a>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <p style="font-size: 16px;">Пока не выдано ни одной единицы
                                                            СИЗ.</p>
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
