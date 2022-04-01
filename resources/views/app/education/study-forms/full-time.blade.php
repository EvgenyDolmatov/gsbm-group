@extends('layouts.education')

@section('title', 'Очная форма обучения')
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
                                <h2>Очная форма обучения</h2>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="width:45px;">№<br>п/п</th>
                                    <th scope="col">Направление обучения</th>
                                    <th scope="col">Выдаваемый документ</th>
                                    <th scope="col">Часы</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Техносферная безопасность. Охрана труда</td>
                                    <td>Диплом</td>
                                    <td>256</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Охрана труда для руководителей и специалистов (разные отрасли производства)</td>
                                    <td>Удостоверение</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Охрана труда для работников рабочих профессий и прочего обслуживающего персонала</td>
                                    <td>Удостоверение</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Безопасные методы и приемы выполнения работ на высоте</td>
                                    <td>Удостоверение</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Внеочередная проверка знаний</td>
                                    <td>Протокол</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Повторная аттестация</td>
                                    <td>-</td>
                                    <td>40/20</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Оказание первой помощи при несчастных случаях на производстве</td>
                                    <td>Свидетельство</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Обучение на группу допуска по электробезопасности</td>
                                    <td>Удостоверение</td>
                                    <td>72</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Пожарная безопасность</td>
                                    <td>Свидетельство</td>
                                    <td>16/24</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Рабочая специальность по любому направлению</td>
                                    <td>Удостоверение/свидетельство</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Гражданская оборона и чрезвычайные ситуации</td>
                                    <td>Удостоверение</td>
                                    <td>72</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Работа с отходами I-IV класс опасности</td>
                                    <td>Удостоверение</td>
                                    <td>112</td>
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
                                            <span class="title">Документ</span>
                                            <span class="value">Диплом</span>
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
                                            <span class="title">Документ</span>
                                            <span class="value">Удостоверение</span>
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
                                            <span class="title">Документ</span>
                                            <span class="value">Удостоверение</span>
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
                                            <span class="title">Документ</span>
                                            <span class="value">Удостоверение</span>
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
                                            <span class="title">Документ</span>
                                            <span class="value">Протокол</span>
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
                                    </div>
                                    <div class="item-value description">
                                        Повторная аттестация
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">7</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">20</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Документ</span>
                                            <span class="value">Свидетельство</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Оказание первой помощи при несчастных случаях на производстве
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">8</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">72</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Документ</span>
                                            <span class="value">Удостоверение</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Обучение на группу допуска по электробезопасности
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">9</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">16/24</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Документ</span>
                                            <span class="value">Свидетельство</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Пожарная безопасность
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">10</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">80</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Документ</span>
                                            <span class="value">Удостоверение/свидетельство</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Рабочая специальность по любому направлению
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">11</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">72</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Документ</span>
                                            <span class="value">Удостоверение</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Гражданская оборона и чрезвычайные ситуации
                                    </div>
                                </div>
                                <!-- Table Row -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">12</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">112</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Документ</span>
                                            <span class="value">Удостоверение</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Работа с отходами I-IV класс опасности
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
