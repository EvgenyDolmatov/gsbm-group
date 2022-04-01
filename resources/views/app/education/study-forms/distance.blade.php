@extends('layouts.education')

@section('title', 'Дистанционное обучение')
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
                                <h2>Дистанционное обучение (без отрыва от производства)</h2>
                            </div>

                            <p>Предлагаем Вам, пройти обучение с использованием дистанционных технологий и получить
                                удостоверение установленного образца. Мы работаем официально со всеми регионами
                                России!</p>

                            <p>Доступ к работе можно получить у специалиста Учебного центра:</p>

                            <ul class="info-list-secondary">
                                <li><a href="#" class="link-primary">оставив заявку</a> на нашем сайте</li>
                                <li>позвонив по телефону (Viber, WhatsApp): <a href="tel:+79091112167" class="link-primary">+7&nbsp;909&nbsp;111&nbsp;2167</a></li>
                                <li>отправить заявку на электронную почту: <a href="mailto:averholanceva@gsbm-group.ru" class="link-primary">averholanceva@gsbm-group.ru</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
