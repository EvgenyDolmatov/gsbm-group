@extends('layouts.education')

@section('title', 'Основные сведения')
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
                                <h2>Основные сведения</h2>
                            </div>

                            <p>Учебный центр ООО "Геострой-Буммаш" оказывает образовательные услуги в различных сферах
                                деятельности:</p>
                            <ul class="info-list-secondary">
                                <li>профессиональная подготовка</li>
                                <li>переподготовка, повышение квалификации по профессиям рабочих и служащих лиц, а также
                                    в области Охраны труда
                                </li>
                            </ul>

                            <p class="mt-5">Наши преимущества:</p>
                            <ul class="info-list-secondary">
                                <li>знания, от профессионалов своего дела, поскольку центр создан на базе одного из
                                    лучших предприятий Приволжского федерального округа
                                </li>
                                <li>удобный формат обучения на выбор: - в классе; - дистанционно или на территории
                                    Вашего предприятия
                                </li>
                                <li>новейшие программы, разработанные в соответствии с Федеральными законами РФ, а также
                                    современные методические пособия
                                </li>
                                <li>гибкая система скидок и индивидуальный подход</li>
                                <li>документы установленного законодательными требованиями РФ образца, по окончанию
                                    обучения
                                </li>
                            </ul>

                            <p class="mt-5">Мы также оказываем консультационные услуги и услуги аутсорсинга в области
                                Охраны труда.</p>
                            <p>Наше главное преимущество – качественные знания, от практиков с большим
                                преподавательским и производственным опытом, которые сделают труда Ваших
                                сотрудников безопасным.</p>

                            <div class="service-title mt-5">
                                <h2>Наши контакты</h2>
                            </div>

                            <div id="map"></div>

                            <p>Фактический адрес: 614107, г. Пермь, ул. Хрустальная, 10а</p>
                            <p>Режим работы: с понедельника по пятницу с 09:00 до 17:00</p>
                            <p>Выходные дни – суббота и воскресенье</p>
                            <p>Телефон: <a href="tel:+79824859262" class="text-primary">+7 (982) 485 9262</a></p>
                            <p>E-mail: <a href="mailto:gsbm.center@mail.ru" class="text-primary">gsbm.center@mail.ru</a>,
                                <a href="mailto:yvashenko@gsbm-group.ru" class="text-primary">yvashenko@gsbm-group.ru</a>
                            </p>

                            <div class="my-5">
                                <h5 class="mb-3">Согласно Постановлению Правительства РФ №1802 от 20 октября 2021 года:</h5>
                                <ul>
                                    <li class="m-3">а) места осуществления образовательной деятельности при использовании сетевой формы реализации образовательных программ – не предусмотрены</li>
                                    <li class="m-3">б) места проведения практики – не предусмотрены</li>
                                    <li class="m-3">в) места проведения практической подготовки обучающихся – не предусмотрены</li>
                                    <li class="m-3">г) места проведения государственной аттестации – не предусмотрены</li>
                                    <li class="m-3">д) места осуществления образовательной деятельности по дополнительным образовательным программам - 614051, г. Пермь, ул. Польская, 35</li>
                                    <li class="m-3">е) места осуществления образовательной деятельности по основным программам профессионального обучения - не предусмотрены</li>
                                </ul>
                            </div>

                            <div class="social mt-5">
                                <h3 class="mb-3">Мы в соцсетях:</h3>
                                <div class="social-items">
                                    <a href="https://t.me/gsbm_center" class="social social-telegram"
                                       target="_blank"></a>
                                    <a href="https://vk.com/club210037775" class="social social-vk" target="_blank"></a>
                                    <a href="https://ok.ru/group/64147437584634" class="social social-ok"
                                       target="_blank"></a>
                                    <a href="https://www.facebook.com/gsbmcenter" class="social social-fb"
                                       target="_blank"></a>
                                    <a href="https://www.instagram.com/gsbm.center" class="social social-instagram"
                                       target="_blank"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('additional-scripts')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=51a23294-4f97-43ec-8dbe-6e047a5427be"
            type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [58.027439, 56.30220],
                    zoom: 17
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'ООО «Геострой-Буммаш»',
                    balloonContent: 'ООО «Геострой-Буммаш»'
                }, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                });

            myMap.geoObjects.add(myPlacemark);
        });
    </script>
@endsection
