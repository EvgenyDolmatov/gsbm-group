@extends('layouts.account')

@section('title', 'Группа ' . $group->name)
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
                                <h2>{{'Группа ' . $group->name}}</h2>
                            </div>

                            <a href="{{route('study-groups.students.create', $group)}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить студента</a>


                            @if($students->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Телефон</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $key => $student)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$student->getFullName()}}</td>
                                            <td><a href="{{'tel:'.$student->phone}}" class="text-primary">{{$student->phone}}</a></td>
                                            <td>
                                                <span @if(!$student->hasVerifiedEmail()) class=" text-black-50 " title="Не подтвержден" @endif>
                                                    <a href="{{'mailto:'.$student->email}}" class="text-primary">{{$student->email}}</a>
                                                </span>
                                            </td>
                                            <td class="actions">
                                                <a href="{{route('study-groups.students.edit', [$group, $student])}}" class="text-primary">Изменить</a>

                                                <form action="{{route('study-groups.students.destroy', [$group, $student])}}" method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{route('study-groups.students.destroy', [$group, $student])}}" class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Студент будет удален. Продолжить?')){this.closest('form').submit();}">
                                                        Удалить
                                                    </a>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="mt-4">В этой группе пока нет ни одного студента.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
