@extends('layouts.account')

@section('title', 'Услуги')
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
                                <h2>Все услуги</h2>
                            </div>

                            <a href="{{route('services.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Добавить</a>


                            @if($services->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td><a href="{{route('services.show-public', $service->slug)}}">{{$service->title}}</a></td>
                                            <td class="actions">
                                                <a href="{{ route('services.edit', $service) }}"
                                                   class="text-primary">Изменить</a>

                                                <form action="{{route('services.destroy', $service)}}" method="POST">
                                                    @csrf @method('delete')

                                                    <a href="{{route('services.destroy', $service)}}" class="text-danger"
                                                       onclick="event.preventDefault();if(confirm('Услуга будет удалена. Продолжить?')){this.closest('form').submit();}">
                                                        Удалить
                                                    </a>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="mt-4">У вас пока нет ни одной услуги.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
