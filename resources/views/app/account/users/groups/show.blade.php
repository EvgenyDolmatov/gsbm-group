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
                                <i class="fa fa-plus"></i> Новый студент</a>
                            <a href="{{route('study-groups.results', $group)}}" class="btn btn-dark">Результаты экзамена</a>

                            <form action="{{ route('study-groups.students.add-to-group', $group) }}" method="POST"
                                  class="account-form mt-5">
                                @csrf

                                <div class="input-group">
                                    <select name="user_id" class="form-select" aria-label="Select user">
                                        <option value="" selected disabled>Выберите студента...</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}"
                                                    @if($user->id==old('user_id')) selected @endif>
                                                {{ $user->getFullName() }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" type="submit">Добавить в группу</button>
                                </div>
                            </form>

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
                                            <td>
                                                <a href="{{ route('study-groups.students.report', $student) }}">
                                                    {{$student->getFullName()}}
                                                </a>
                                            </td>
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
                                                <a href="{{route('study-groups.students.edit', [$group, $student])}}"
                                                   class="text-primary">Изменить</a>

                                                <form
                                                    action="{{route('study-groups.students.destroy', [$group, $student])}}"
                                                    method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{route('study-groups.students.destroy', [$group, $student])}}"
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
