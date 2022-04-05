@extends('layouts.account')

@section('title', 'Учебные группы')
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
                                <h2>Учебные группы</h2>
                            </div>

                            <a href="{{route('study-groups.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить</a>


                            @if($groups->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($groups as $group)
                                        <tr>
                                            <td><a href="{{route('study-groups.show', $group)}}">{{$group->name}}</a></td>
                                            <td class="actions">
                                                <a href="{{ route('study-groups.edit', $group) }}"
                                                   class="text-primary">Изменить</a>

                                                <form action="{{route('study-groups.destroy', $group)}}" method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{route('study-groups.destroy', $group)}}" class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Группа будет удалена вместе со студентами. Продолжить?')){this.closest('form').submit();}">
                                                        Удалить
                                                    </a>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="mt-4">У вас пока нет ни одной группы.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
