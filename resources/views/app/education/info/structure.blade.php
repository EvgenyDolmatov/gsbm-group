@extends('layouts.education')

@section('title', 'Структура и органы управления образовательной организацией')
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
                                <h2>Структура и органы управления образовательной организацией</h2>
                            </div>


                            <div class="d-flex justify-content-center">
                                <div class="structure-tile arrow-bottom">
                                    <div class="tile-title">
                                        <h4>Генеральный директор ООО&nbsp;«Геострой&#8209;Буммаш»</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="structure-tile arrow-bottom">
                                    <div class="tile-title">
                                        <h4>Руководитель Учебного&nbsp;Центра</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="structure-tile arrow-both">
                                    <div class="tile-title">
                                        <h4>Методист</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="structure-tile">
                                    <div class="tile-title">
                                        <h4>Педагоги</h4>
                                    </div>
                                </div>
                                <div class="structure-tile">
                                    <div class="tile-title">
                                        <h4>Диспетчер</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
