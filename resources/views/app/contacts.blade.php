@extends('layouts.guest')

@section('title', 'Контакты')
@section('keywords', 'Контакты')
@section('description', 'Контакты')

@section('content')
    <section id="contacts">
        <div class="header bg-white mb-5">
            <div class="container-xl container-fluid">
                <h1 class="page-header mb-0">Контакты</h1>
            </div>
        </div>
        <div class="container-xl container-fluid">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <p>ООО «Геострой-Буммаш»</p>
                    <div class="header">
                        <h5>Исполнительный директор</h5>
                        <p class="person-name">Коровин Пётр</p>
                        <a href="mailto:pkorovin@gsbm-group.ru" class="person-link person-link-email">
                            pkorovin@gsbm-group.ru
                        </a>
                        <a href="tel:+79027909924" class="person-link" style="margin-bottom: 30px;">
                            +7 (902) 790 99 24
                        </a>

                        <h5>Зам. генерального директора</h5>
                        <p class="person-name">Соснин Денис</p>
                        <a href="mailto:dsosnin@gsbm-group.ru" class="person-link person-link-email">
                            dsosnin@gsbm-group.ru
                        </a>
                        <a href="tel:+79519385356" class="person-link" style="margin-bottom: 30px;">
                            +7 (951) 938 53 56
                        </a>

                        <h5>Региональный менеджер</h5>
                        <p class="person-name">Кузьмин Сергей</p>
                        <a href="mailto:skuzmin@gsbm-group.ru" class="person-link person-link-email">
                            skuzmin@gsbm-group.ru
                        </a>
                        <a href="tel:+79247025857" class="person-link" style="margin-bottom: 30px;">
                            +7 (924) 702 58 57
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="section-content">
                        <div id="map"></div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <h5>Банковские реквизиты</h5>
                            <p>ВОЛГО-ВЯТСКИЙ БАНК Сбербанка России<br>
                                ИНН/КПП 5906152298/590601001<br>
                                р/с 40702810449770034142<br>
                                БИК 042202603,<br>
                                к/с 30101810900000000603
                            </p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <h5>Юридический адрес</h5>
                            <p>614107, Российская&nbsp;Федерация, Пермский&nbsp;край, г.&nbsp;Пермь, ул Уральская, д. 69/1, этаж 2</p>

                            <h5>Фактический адрес</h5>
                            <p>614107, Российская&nbsp;Федерация, Пермский&nbsp;край, г.&nbsp;Пермь, ул Уральская, д. 69/1, этаж 2</p>
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
                    center: [58.029236, 56.299835],
                    zoom: 17.8
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
