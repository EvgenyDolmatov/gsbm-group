@extends('layouts.account')

@section('title', 'Управление курсами')
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
                                <h2>Все курсы</h2>
                            </div>

                            <a href="{{route('courses.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить</a>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Направление</th>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$course->studyArea->name}}</td>
                                        <td><a href="{{route('courses.show', $course)}}">{{$course->title}}</a></td>
                                        <td class="actions">
                                            <a href="{{ route('courses.edit', $course) }}"
                                               class="text-primary">Изменить</a>

                                            <form action="{{route('courses.destroy', $course)}}" method="POST">
                                                @csrf @method('delete')

                                                <a href="{{route('courses.destroy', $course)}}" class="text-danger"
                                                   onclick="event.preventDefault();if(confirm('Курс будет удален. Продолжить?')){this.closest('form').submit();}">
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
