@extends('layouts.education')

@section('title', 'Разрешительные документы')
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.education-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>Разрешительные документы</h2>
                            </div>

                            <a href="{{asset('documents/uchebnyj_centr_licenziya.pdf')}}"
                               class="d-block link-primary mb-2" target="_blank">Лицензия с приложением ООО&nbsp;«Геострой&#8209;Буммаш»</a>
                            <a href="{{asset('documents/uchebnyj_centr_akkreditaciya.jpg')}}"
                               class="d-block link-primary mb-2" target="_blank">Аккредитация ООО&nbsp;«Геострой&#8209;Буммаш»</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
