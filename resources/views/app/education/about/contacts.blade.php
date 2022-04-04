@extends('layouts.education')

@section('title', 'Наши контакты')
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
                                <h2>Наши контакты</h2>
                            </div>

                            <div id="map"></div>

                            <p>Фактический адрес: 614051, г. Пермь, ул. Подольская, д. 35</p>
                            <p>Режим работы: с понедельника по пятницу с 09:00 до 17:00</p>
                            <p>Выходные дни – суббота и воскресенье</p>
                            <p>Телефон: <a href="tel:+79091112167" class="text-primary">+7 (909) 111 2167</a></p>
                            <p>E-mail: <a href="mailto:gsbm.center@mail.ru" class="text-primary">gsbm.center@mail.ru</a></p>

                            <div class="social mt-5">
                                <h3>Мы в соцсетях:</h3>
                                <div class="social-items">
                                    <a href="https://t.me/gsbm_center" class="social social-telegram" target="_blank"></a>
                                    <a href="https://vk.com/club210037775" class="social social-vk" target="_blank"></a>
                                    <a href="https://ok.ru/group/64147437584634" class="social social-ok" target="_blank"></a>
                                    <a href="https://www.facebook.com/gsbmcenter" class="social social-fb" target="_blank"></a>
                                    <a href="https://www.instagram.com/gsbm.center" class="social social-instagram" target="_blank"></a>
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
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=51a23294-4f97-43ec-8dbe-6e047a5427be" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [58.003145, 56.307732],
                    zoom: 16
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
