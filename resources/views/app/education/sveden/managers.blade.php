@extends('layouts.education')

@section('title', 'Руководство')
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
                                <h2>Руководство</h2>
                            </div>

                            <div class="mb-5">
                                <h3>Лопатин Роман Владимирович</h3>
                                <p>
                                    <strong>Должность:</strong>
                                    Генеральный директор ООО «Геострой-Буммаш»
                                </p>
                                <p>
                                    <strong>Телефон:</strong>
                                    <a href="tel:+73422055003">+7 (342) 205-50-03</a>
                                </p>
                                <p>
                                    <strong>E-mail:</strong>
                                    <a href="mailto:rlopatin@gsbm-group.ru" target="_blank">rlopatin@gsbm-group.ru</a>
                                </p>
                            </div>

                            <div class="mb-5">
                                <h3>Рогожникова Юлия Александровна</h3>
                                <p>
                                    <strong>Должность:</strong>
                                    Руководитель учебного центра
                                </p>
                                <p>
                                    <strong>Телефон:</strong>
                                    <a href="tel:+79824859262">+7 (982) 485-92-62</a>
                                </p>
                                <p>
                                    <strong>E-mail:</strong>
                                    <a href="mailto:yvashenko@gsbm-group.ru" target="_blank">yvashenko@gsbm-group.ru</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
