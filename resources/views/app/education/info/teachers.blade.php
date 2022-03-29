@extends('layouts.education')

@section('title', 'Руководство. Педагогический состав')
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
                                <h2>Руководство. Педагогический состав</h2>
                            </div>

                            <div class="section-content">
                                <div class="container-xl container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="simple-tile">
                                                <div class="tile-title">
                                                    <h4>Александра Верхоланцева</h4>
                                                </div>
                                                <div class="tile-description">
                                                    <p>Руководитель учебного центра</p>
                                                </div>
                                                <div class="tile-contacts">
                                                    <a href="mailto:rlopatin@gsbm-group.ru">averholanceva@gsbm-group.ru</a>
                                                    <a href="tel:+79091112167">+7 909 111 2167</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="simple-tile">
                                                <div class="tile-title">
                                                    <h4>Чурилов Михаил</h4>
                                                </div>
                                                <div class="tile-description">
                                                    <p>Специалист по ОТ и ТБ</p>
                                                </div>
                                                <div class="tile-contacts">
                                                    <a href="mailto:churilovma2015@gmail.com">churilovma2015@gmail.com</a>
                                                    <a href="tel:+79048475801">+7 904 847 5801</a>
                                                </div>
                                            </div>
                                        </div>
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
