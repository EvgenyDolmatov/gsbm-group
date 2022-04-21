@extends('layouts.account')

@section('title', 'Руководители')
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
                                <h2>Руководители направлений</h2>
                            </div>

                            <a href="{{route('leaders.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить</a>

                            @if($leaders->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Должность</th>
                                        <th scope="col">Направление</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($leaders as $leader)
                                        <tr>
                                            <td>{{$leader->getFullName()}}</td>
                                            <td>{{$leader->position}}</td>
                                            <td>{{$leader->service->title}}</td>
                                            <td class="actions">
                                                <a href="{{ route('leaders.edit', $leader) }}"
                                                   class="text-primary">Изменить</a>

                                                <form action="{{route('leaders.destroy', $leader)}}" method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{route('leaders.destroy', $leader)}}" class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Руководитель будет удален. Продолжить?')){this.closest('form').submit();}">
                                                        Удалить
                                                    </a>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="mt-4">У вас пока нет ни одного руководителя.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
