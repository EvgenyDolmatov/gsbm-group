@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM - Выдача СИЗ для ' . $employee->getFullName() . " - " . $issuedInventory . " (ред.)")
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
                                <h2>{{$employee->getFullName() . ' (выдача СИЗ)'}}</h2>
                            </div>

                            <form action="{{route("crm.inventory-issue.update", [$employee, $issuedInventory])}}"
                                  method="POST" class="account-form">
                                @csrf @method('PUT')

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-group mb-5">
                                            <label for="inventory_item_id" class="form-label">Средство индивидуальной
                                                защиты</label>
                                            <select name="inventory_item_id" id="inventory_item_id"
                                                    class="form-select shadow-none" disabled>
                                                <option value="" selected disabled>Выберите СИЗ</option>
                                                @foreach($items as $item)
                                                    <option value="{{$item->id}}"
                                                            @if($item->id==old("inventory_item_id", $issuedInventory->inventory_item_id)) selected @endif>
                                                        {{$item->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('inventory_item_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="quantity" class="form-label">Количество</label>
                                            <input type="number" id="quantity" class="form-control shadow-none"
                                                   name="quantity"
                                                   value="{{old('quantity', $issuedInventory->quantity)}}">
                                            @error('quantity')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="issue_date" class="form-label">Дата выдачи</label>
                                            <input type="date" id="issue_date" class="form-control shadow-none"
                                                   name="issue_date" value="{{old('issue_date', $issuedInventory->issue_date)}}">
                                            @error('issue_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <label for="next_issue_date" class="form-label">Дата следующей
                                                выдачи</label>
                                            <input type="date" id="next_issue_date" class="form-control shadow-none"
                                                   name="next_issue_date" value="{{old('next_issue_date', $issuedInventory->next_issue_date)}}">
                                            @error('next_issue_date')
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
