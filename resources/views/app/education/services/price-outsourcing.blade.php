@extends('layouts.education')

@section('title', 'Услуги аутсорсинга в области охраны труда')
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
                                <h2>Услуги аутсорсинга в области охраны труда</h2>
                            </div>

                            <!-- Table for desktop -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="width:45px;">№<br>п/п</th>
                                    <th scope="col">Услуга</th>
                                    <th scope="col">Стоимость</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Система управления охраны труда (17 документов)</td>
                                    <td>10&nbsp;000 руб./комплект</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Локально-нормативные акты, положения</td>
                                    <td>600 руб./шт.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Стандарты по охране труда, правила</td>
                                    <td>700 руб./шт.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Приказы</td>
                                    <td>450 руб./шт.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Инструкции по охране труда (по специальности)</td>
                                    <td>500 руб./шт.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Инструкции по охране труда (по видам работ)</td>
                                    <td>500 руб./шт.</td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- Table for mobile -->
                            <div class="table-flex">
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">1</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">256</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">9 700</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Техносферная безопасность. Охрана труда.
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">2</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">40</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">2 000</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Охрана труда для руководителей и специалистов (разные отрасли производства)
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">3</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">20</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">1 850</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Охрана труда для работников рабочих профессий и прочего обслуживающего персонала
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">4</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">24</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">1 500</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Безопасные методы и приемы выполнения работ на высоте
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">5</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">16</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">600</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Внеочередная проверка знаний
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">6</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">40/20</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">1 000</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Повторная аттестация
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
