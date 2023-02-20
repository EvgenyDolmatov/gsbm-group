@extends('layouts.account')

@section('title', 'Приход СИЗ: ' . $item->name)
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
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>{{'Приход СИЗ: ' . $item->name}}</h2>
                            </div>

                            <form action="{{route("crm.inventory.update-qty", $item)}}" method="POST"
                                  class="account-form">
                                @csrf @method('PUT')

                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <div class="form-group">
                                            <label for="quantity" class="form-label">Приход на склад</label>
                                            <input type="number" id="quantity" class="form-control shadow-none"
                                                   name="quantity"
                                                   value="{{old('quantity', 1)}}">
                                            @error('quantity')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group mb-5">
                                            <button type="submit" class="btn btn-brand btn-filled"
                                                    style="margin-top: 37px"
                                                    onclick="event.preventDefault();if(confirm('Приход: '+$('#quantity').val()+' шт. Все верно?')){this.closest('form').submit();}">
                                                Добавить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
