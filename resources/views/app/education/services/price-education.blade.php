@extends('layouts.education')

@section('title', 'Обучение по охране труда и смежным направлениям')
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
                                <h2>Обучение по охране труда и смежным направлениям</h2>
                            </div>
                            <!-- Table for desktop -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="width:45px;">№<br>п/п</th>
                                    <th scope="col">Направление обучения</th>
                                    <th scope="col">Часы</th>
                                    <th scope="col">Стоимость,<br>руб./чел.</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Охрана труда. Техносферная безопасность</td>
                                    <td>256</td>
                                    <td>9&nbsp;700</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Охрана труда для руководителей и специалистов (разные отрасли производства)</td>
                                    <td>40</td>
                                    <td>2&nbsp;000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Охрана труда для работников рабочих профессий и прочего обслуживающего персонала</td>
                                    <td>20</td>
                                    <td>1 850</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Безопасные методы и приемы выполнения работ на высоте</td>
                                    <td>24</td>
                                    <td>1&nbsp;500</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Внеочередная проверка знаний</td>
                                    <td>16</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Повторная аттестация</td>
                                    <td>40/20</td>
                                    <td>1&nbsp;000</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Первая помощь</td>
                                    <td>20</td>
                                    <td>1&nbsp;300</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Электробезопасность</td>
                                    <td>72</td>
                                    <td>2&nbsp;800</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Пожарная безопасность</td>
                                    <td>16</td>
                                    <td>1 200</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Пожарная безопасность</td>
                                    <td>24</td>
                                    <td>1 500</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Рабочая специальность (любое направление)</td>
                                    <td>80</td>
                                    <td>2&nbsp;500</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Рабочая специальность (любое направление)</td>
                                    <td>20</td>
                                    <td>2&nbsp;000</td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- Table for mobile -->
                            <div class="table-flex">
                                <!-- 1. Техносферная безопасность. Охрана труда -->
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
                                <!-- 2. Охрана труда для руководителей и специалистов (разные отрасли производства) -->
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
                                <!-- 3. Охрана труда для работников рабочих профессий и прочего обслуживающего персонала -->
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
                                <!-- 4. Безопасные методы и приемы выполнения работ на высоте -->
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
                                <!-- 5. Внеочередная проверка знаний -->
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
                                <!-- 6. Повторная аттестация -->
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
                                <!-- 7. Первая помощь -->
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
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">1 300</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Первая помощь
                                    </div>
                                </div>
                                <!-- 8. Электробезопасность -->
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
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">2 800</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Первая помощь
                                    </div>
                                </div>
                                <!-- 9. Пожарная безопасность -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">9</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">16</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">1 200</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Пожарная безопасность
                                    </div>
                                </div>
                                <!-- 10. Пожарная безопасность -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">10</span>
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
                                        Пожарная безопасность
                                    </div>
                                </div>
                                <!-- 11. Рабочая специальность (любое направление) -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">11</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">80</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">2 500</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Рабочая специальность (любое направление)
                                    </div>
                                </div>
                                <!-- 12. Рабочая специальность (любое направление) -->
                                <div class="table-flex-item">
                                    <div class="item-main">
                                        <div class="item-main-params code">
                                            <span class="title">№ п/п</span>
                                            <span class="value">12</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Часы</span>
                                            <span class="value">20</span>
                                        </div>
                                        <div class="item-main-params hours">
                                            <span class="title">Стоимость, руб.</span>
                                            <span class="value">2 000</span>
                                        </div>
                                    </div>
                                    <div class="item-value description">
                                        Рабочая специальность (любое направление)
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
