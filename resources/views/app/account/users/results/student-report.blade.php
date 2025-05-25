@extends('layouts.account')

@section('title', $student->getFullName() . '. Статистика')
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
                    <div class="col-lg-8 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>{{$student->getFullName() . '. Статистика'}}</h2>
                            </div>
                            @if($student->groups->count())
                                @foreach($student->groups as $group)
                                    <h4 class="mt-5 mb-0">{{ "Группа «" . $group->name . "»"}}</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">№</th>
                                            <th scope="col">Название</th>
                                            <th scope="col">Баллы</th>
                                            <th scope="col" style="width: 130px">Сдано</th>
                                            <th scope="col">Дата</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-dark text-light">
                                            <td colspan="5" class="text-center font-weight-bold">Лекции</td>
                                        </tr>
                                        @if($group->course)
                                            @foreach($group->course->stages->where("type", "lesson") as $stage)
                                                @foreach($student->results->where("stage_id", $stage->id) as $result)
                                                    <tr>
                                                        <td>{{ $loop->parent->index + 1 }}</td>
                                                        <td>{{ $result->stage->lesson->title }}</td>
                                                        <td>-</td>
                                                        <td>
                                                            @if($result->is_passed)
                                                                Изучено
                                                            @else
                                                                Не изучено
                                                            @endif
                                                        </td>
                                                        <td>{{ $result->getDate() }}</td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                            <tr class="bg-dark text-light">
                                                <td colspan="5" class="text-center font-weight-bold">Сдача тестов</td>
                                            </tr>
                                            @foreach($group->course->stages->where("type", "quiz") as $stage)
                                                @foreach($student->results->where("stage_id", $stage->id) as $result)
                                                    <tr>
                                                        @if($loop->index == 0)
                                                            <td rowspan="{{$student->results->where("stage_id", $stage->id)->count()}}">
                                                                {{ $loop->parent->index + 1 }}
                                                            </td>
                                                            <td rowspan="{{$student->results->where("stage_id", $stage->id)->count()}}">
                                                                {{ $result->stage->quiz->title }}
                                                            </td>
                                                        @endif
                                                        <td>{{ $result->points }}</td>
                                                        <td>
                                                            @if($result->is_passed)
                                                                Сдано
                                                            @else
                                                                Не сдано
                                                            @endif
                                                        </td>
                                                        <td>{{ $result->getDate() }}</td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        @endif

                                        <tr class="bg-dark text-light">
                                            <td colspan="5" class="text-center">
                                                <strong>Итоговый тест</strong>
                                            </td>
                                        </tr>
                                        @foreach($student->results->where("is_exam") as $result)
                                            @foreach($group->course->stages->where("type", "quiz") as $stage)
                                                @if($result->stage_id === $stage->id)
                                                    <tr class="text-light @if($result->is_passed) bg-success @else bg-danger @endif">
                                                        <td></td>
                                                        <td>{{ $stage->quiz->title }}</td>
                                                        <td>{{ $result->points }}</td>
                                                        <td>
                                                            @if($result->is_passed)
                                                                Сдано
                                                            @else
                                                                Не сдано
                                                            @endif
                                                        </td>
                                                        <td>{{ $result->getDate() }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
