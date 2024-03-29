@extends('layouts.account')

@section('title', 'Направления')
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.account-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>Все направления</h2>
                            </div>

                            <a href="{{route('directions.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить</a>

                            @if(session()->has('errMessage'))
                                <div class="alert alert-danger mt-4">
                                    <span>{{session('errMessage')}}</span>
                                </div>
                            @endif

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($studyAreas as $area)
                                    <tr>
                                        <td>{{$area->name}}</td>
                                        <td class="actions">
                                            <a href="{{ route('directions.edit', $area) }}"
                                               class="text-primary">Изменить</a>

                                            <form action="{{route('directions.destroy', $area)}}" method="POST">
                                                @csrf @method('delete')

                                                <a href="{{route('directions.destroy', $area)}}" class="text-danger"
                                                   onclick="event.preventDefault();if(confirm('Направление будет удалено. Продолжить?')){this.closest('form').submit();}">
                                                    Удалить
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
