@extends('layouts.account')

@section('title', 'Студенты')
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
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="page-right-content">
                            <div class="service-title d-flex justify-content-between align-items-center">
                                <h2>{{'Все студенты'}}</h2>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('students.create') }}" class="btn btn-success">
                                        <i class="fa fa-plus"></i> Новый студент</a>
                                </div>
                            </div>

                            @if (session('success'))
                                <div class="col-sm-12">
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                </div>
                            @endif

                            @if (session('created_success'))
                                <div class="col-sm-12">
                                    <div class="alert alert-success">
                                        {{ session('created_success') }}
                                    </div>
                                </div>
                            @endif

                            @if($students->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col" >№</th>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Телефон</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$student->getFullName()}}</td>
                                            <td><a href="{{'tel:'.$student->phone}}"
                                                   class="text-primary">{{$student->phone}}</a></td>
                                            <td>
                                                <span @if(!$student->hasVerifiedEmail()) class=" text-black-50 "
                                                      title="Не подтвержден" @endif>
                                                    <a href="{{'mailto:'.$student->email}}"
                                                       class="text-primary">{{$student->email}}</a>
                                                </span>
                                            </td>
                                            <td class="actions">
                                                <a href="{{ route('students.edit', $student) }}"
                                                   class="text-primary">Изменить</a>

                                                <form
                                                    action="{{ route('students.destroy', $student) }}"
                                                    method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{ route('students.destroy', $student) }}"
                                                       class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Студент будет исключен. Продолжить?')){this.closest('form').submit();}">
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
                                    @foreach($students as $key => $student)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params code">
                                                    <span class="title">№</span>
                                                    <span class="value">{{$key+1}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">ФИО</span>
                                                    <span class="value">{{$student->getFullName()}}</span>
                                                </div>
                                            </div>
                                            <div class="item-value description pt-2">
                                                <p style="margin-bottom: 0">
                                                    Тел: <a href="tel:{{$student->phone}}"
                                                            class="text-primary">{{$student->phone}}</a>
                                                </p>
                                                <p style="margin-bottom: 0">
                                                    E-mail: <a href="tel:{{$student->email}}"
                                                               class="text-primary">{{$student->email}}</a>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
