@extends('layouts.guest')

@section('title', 'Контакты')
@section('keywords', 'Контакты')
@section('description', 'Контакты')

@section('content')
    <section id="contacts">
        <div class="container-xl container-fluid">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="header">
                        <h1 class="page-header">Контакты</h1>

                        <p>ООО «Геострой-Буммаш»</p>

                        <h5>Банковские реквизиты</h5>

                        <p>ВОЛГО-ВЯТСКИЙ БАНК Сбербанка России<br>
                            ИНН/КПП 5906152298/590601001<br>
                            р/с 40702810449770034142<br>
                            БИК 042202603,<br>
                            к/с 30101810900000000603
                        </p>

                        <h5>ФИО руководителя</h5>
                        <p>Лопатин Роман Владимирович</p>
                        <h5>Телефон</h5>
                        <a href="tel:+79504725766">8 950 472 57 66</a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="section-content">
                        <div id="map"></div>

                        <h5>Юридический адрес</h5>
                        <p>614107, Российская&nbsp;Федерация, Пермский&nbsp;край, г.&nbsp;Пермь, ул Уральская, д. 69/1, этаж 2</p>
                        <h5>Фактический адрес</h5>
                        <p>614107, Российская&nbsp;Федерация, Пермский&nbsp;край, г.&nbsp;Пермь, ул Уральская, д. 69/1, этаж 2</p>
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
                    center: [58.073284, 56.349979],
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
