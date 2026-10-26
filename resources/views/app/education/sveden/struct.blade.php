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

                            <div class="mb-5">
                                <h3>
                                    Генеральный директор ООО «Геострой-Буммаш» (единоличный исполнительный орган)
                                </h3>
                                <p>
                                    <strong>Руководитель (ФИО, должность):</strong>
                                    Лопатин Роман Владимирович, Генеральный директор
                                </p>
                                <p>
                                    <strong>Место нахождения:</strong>
                                    614107, г. Пермь, ул. Хрустальная, д. 10А
                                </p>
                                <p>
                                    <strong>Сайт:</strong>
                                    <a href="https://gsbm-group.ru" target="_blank">https://gsbm-group.ru</a>
                                </p>
                                <p>
                                    <strong>E-mail:</strong>
                                    <a href="mailto:rlopatin@gsbm-group.ru" target="_blank">rlopatin@gsbm-group.ru</a>
                                </p>
                                <p>
                                    <strong>Положение:</strong>
                                    <a href="{{asset('documents/sveden/00_УСТАВ_ООО.pdf')}}" target="_blank">
                                        Устав ООО
                                    </a>
                                </p>
                            </div>

                            <div class="mb-5">
                                <h3>
                                    Специализированное структурное образовательное подразделение (Учебный центр)
                                </h3>
                                <p>
                                    <strong>Руководитель (ФИО, должность):</strong>
                                    Рогожникова Юлия Александровна, руководитель учебного центра
                                </p>
                                <p>
                                    <strong>Место нахождения:</strong>
                                    614107, г. Пермь, ул. Хрустальная, д. 10А
                                </p>
                                <p>
                                    <strong>Сайт:</strong>
                                    <a href="https://gsbm-group.ru" target="_blank">https://gsbm-group.ru</a>
                                </p>
                                <p>
                                    <strong>E-mail:</strong>
                                    <a href="mailto:yvashenko@gsbm-group.ru" target="_blank">yvashenko@gsbm-group.ru</a>
                                </p>
                                <p>
                                    <strong>Положение:</strong>
                                    <a
                                        href="{{asset('documents/sveden/01_Положение_о_Учебном_центре.pdf')}}"
                                        target="_blank"
                                    >Положение о Учебном центре</a>
                                </p>
                            </div>

                            <div class="mb-5">
                                <h3>
                                    Педагогический совет (коллегиальный орган)
                                </h3>
                                <p>
                                    <strong>Руководитель (ФИО, должность):</strong>
                                    Председатель – Генеральный директор либо уполномоченное им лицо
                                </p>
                                <p>
                                    <strong>Место нахождения:</strong>
                                    614107, г. Пермь, ул. Хрустальная, д. 10А
                                </p>
                                <p>
                                    <strong>Положение:</strong>
                                    <a
                                        href="{{asset('documents/sveden/12_Положение_о_педагогическом_совете.pdf')}}"
                                        target="_blank"
                                    >Положение о педагогическом совете</a>
                                </p>
                            </div>

                            <div class="mb-5">
                                <h3>
                                    Общее собрание работников Учебного центра (коллегиальный орган)
                                </h3>
                                <p>
                                    <strong>Руководитель (ФИО, должность):</strong>
                                    Председатель – Генеральный директор либо уполномоченное им лицо
                                </p>
                                <p>
                                    <strong>Место нахождения:</strong>
                                    614107, г. Пермь, ул. Хрустальная, д. 10А
                                </p>
                                <p>
                                    <strong>Положение:</strong>
                                    <a
                                        href="{{asset('documents/sveden/13_Положение_об_общем_собрании_работников.pdf')}}"
                                        target="_blank"
                                    >Положение об общем собрании работников</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
