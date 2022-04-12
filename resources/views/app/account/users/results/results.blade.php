@extends('layouts.account')

@section('title', 'Результаты экзамена гр. ' . $group->name)
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
                                <h2>{{'Результаты экзамена гр. ' . $group->name}}</h2>
                            </div>

                            <a href="{{route('study-groups.show', $group)}}" class="btn btn-dark">Назад</a>

                            @if($students->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Студент</th>
                                        <th scope="col">Курс</th>
                                        <th scope="col">Результат</th>
                                        <th scope="col">Дата</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $key => $student)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$student->getFullName()}}</td>
                                            <td>
                                                @if($group->course) {{$group->course->title}} @endif
                                            </td>
                                            <td>{{ $student->getResultByGroup($group) }}</td>
                                            <td>{{ $student->getResultDate($group) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <!-- Table for mobile -->
                                <div class="table-flex">
                                    @foreach($students as $key => $student)
                                        <div class="table-flex-item">
                                            <div class="item-main">
                                                <div class="item-main-params hours">
                                                    <span class="title">Студент</span>
                                                    <span class="value">{{$student->getFullName()}}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Результат</span>
                                                    <span class="value">{{ $student->getResultByGroup($group) }}</span>
                                                </div>
                                                <div class="item-main-params hours">
                                                    <span class="title">Дата</span>
                                                    <span class="value">{{ $student->getResultDate($group) }}</span>
                                                </div>
                                            </div>
                                            <div class="item-value description pt-2">
                                                <p style="margin-bottom: 0">
                                                    Курс: @if($group->course) {{$group->course->title}} @endif
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
