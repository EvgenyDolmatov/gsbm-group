@extends('layouts.education')

@section('title', 'Документы')
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
                                <h2>Документы</h2>
                            </div>

                            <a href="{{asset('documents/uc_polozhenie_ob_obrazovatelnom_uchrezhdenii.docx')}}"
                               class="d-block link-primary mb-2" target="_blank">
                                Положение о специализированном структурном образовательном подразделении (учебном
                                центре) Общества с ограниченной ответственностью «ГЕОСТРОЙ&#8209;БУММАШ»
                            </a>

                            <a href="{{asset('documents/uc_polozhenie_o_dop_obrazovanii.pdf')}}"
                               class="d-block link-primary mb-2" target="_blank">
                                Положение о дополнительном образовании
                            </a>

                            <a href="{{asset('documents/uc_polozhenie_o_programmah.pdf')}}"
                               class="d-block link-primary mb-2" target="_blank">
                                Положение об организации и проведении образовательных программ повышения квалификации
                            </a>

                            <a href="{{asset('documents/uc_polozhenie_o_personalnyh_dannyh.pdf')}}"
                               class="d-block link-primary mb-2" target="_blank">
                                Положение о персональных данных
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
