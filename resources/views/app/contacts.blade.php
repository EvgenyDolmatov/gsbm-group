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
                            ИНН/КПП  7707083893/ 526002001<br>
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
                        <div id="ya-maps">
                            <img src="{{asset('assets/app/img/ya-maps.jpg')}}" alt>
                        </div>

                        <h5>Юридический адрес</h5>
                        <p>614056, Российская&nbsp;Федерация, Пермский&nbsp;край, г.&nbsp;Пермь, ул.&nbsp;Соликамская, д.248 лит.&nbsp;А оф.4</p>
                        <h5>Фактический адрес</h5>
                        <p>614015, Российская&nbsp;Федерация, Пермский&nbsp;край, г. Пермь, ул. Уральская 69/1, 2 этаж</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
