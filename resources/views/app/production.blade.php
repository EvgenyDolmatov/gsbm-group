@extends('layouts.guest')

@section('title', 'Производство')
@section('keywords', 'Производство')
@section('description', 'Производство')

@section('content')
    <!-- Services -->
    <section id="production">
        <div class="header bg-white">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1 class="page-header">Производство</h1>
                    </div>
                    <div class="col-lg-7 col-12 mb-5">
                        <h2 class="mb-4">Поддержи Российского производителя <br>ООО«Геострой-Буммаш!»</h2>
                        <p>Наша компания является участником Национального Союза «Буммаш».</p>
                        <p>Мы разработали новый продукт на рынке ЦБК в рамках программы импортозамещения и рады
                            предложить его Вам - ПАРОКОНДЕНСАТНЫЕ ГОЛОВКИ.</p>
                        <p>отационное соединение является ответственной частью оборудования, важного при эксплуатации
                            КДМ и БДМ, которое успешно заменяет и не уступает европейским производителям таких фирм как
                            Johnson KADANT, Deublin, Voith и пр.</p>
                    </div>
                    <div class="col-lg-5 col-12 mb-5">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production-main.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="page-description">
                            <h3 class="mb-4">Представляем наши парокондесатные головки.</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production1.jpg')}}"
                                 alt="Аналог ОСТ 454.00.000 ТО2">
                            <p class="text-sm-center">Аналог ОСТ 454.00.000 ТО2</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mt-5">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production2.jpg')}}"
                                 alt="Аналог КАДАНТ">
                            <p class="text-sm-center">Аналог КАДАНТ</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production3.jpg')}}"
                                 alt="Аналог Deublin">
                            <p class="text-sm-center">Аналог Deublin</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <table class="table mb-5">
                            <thead>
                            <tr>
                                <th scope="col" class="text-start">Наша пароконденсатная головка:</th>
                                <th scope="col" class="text-start">Приобретая нашу продукцию вы:</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Обеспечит надежную и бесперебойную работу оборудования</td>
                                <td>Снимаете риски выхода из сушильных цилиндров</td>
                            </tr>
                            <tr>
                                <td>Прочность, надежность и технологичность конструкции</td>
                                <td>Сокращает сроки поставки запасных частей или замены в сборе</td>
                            </tr>
                            <tr>
                                <td>Удобство монтажа и демонтажа</td>
                                <td>Повышаете надёжность оборудования</td>
                            </tr>
                            <tr>
                                <td>Положительные отзывы от покупателей</td>
                                <td>Сервисную поддержку в ходе эксплуатации</td>
                            </tr>
                            <tr>
                                <td>Может быть установлен на существующие корзины Kadant и не только</td>
                                <td>Получаете 2 года гарантии</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <b>Это уникальный и эксклюзивный продукт Российского производителя.</b>
                                </td>
                                <td class="text-center">
                                    <b>Что влияет на производственный план и снижение скорости выпуска продукции.</b>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-lg-7 col-12 my-5">
                        <h2 class="mb-4">Преимущество нашей конструкции является:</h2>
                        <ul class="info-list-secondary mb-5">
                            <li>применение литья чугуна марки СЧ25 для корпуса</li>
                            <li>прижимное кольцо изготовлено из марки чугуна АЧВ (антифрикционный чугун)</li>
                            <li>центральная труба на выбор изготавливается из стали 12Х18Н10Т или стали 40Х</li>
                            <li>применяются высококачественные уплотнения Viton</li>
                            <li>прокладки изготовлены из терморасширенного графита (ПУТГ)</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-12 my-5">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production4.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
                    </div>


                    <div class="col-12">
                        <table class="table mb-5">
                            <thead>
                            <tr>
                                <th scope="col" class="text-start">Комплектация конструкции</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ПКГ с трубой нержавейка и корзина</td>
                            </tr>
                            <tr>
                                <td>ПКГ с трубой нержавейка без корзины</td>
                            </tr>
                            <tr>
                                <td>ПКГ с трубой 40Х и корзина</td>
                            </tr>
                            <tr>
                                <td>ПКГ с трубой 40Х без корзины</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="mb-4">
                        Какие преимущества вы получите при сотрудничестве
                        с российским производителем ООО&nbsp;«Геострой&#8209;Буммаш»?
                    </h2>
                    <ul class="info-list-secondary mb-5">
                        <li>быстрая доставка и надёжность</li>
                        <li>качественная обратная связь</li>
                        <li>наличие склада для изнашиваемых позиции</li>
                        <li>сокращает сроки поставки запасных частей или замены в сборе, так как Вы обращаетесь на
                            прямую к изготовителю
                        </li>
                        <li>аналоги собственного изготовления доступны всегда, вне зависимости от курса валют,
                            ограничений со стороны зарубежных компаний и поставщиков
                        </li>
                        <li>работаем по всей территории РФ и стран Таможенного союза</li>
                    </ul>

                    <p>Сотрудничать с российскими производителями подчас разумнее, чем искать оригинальную продукцию
                        от лидера производства в море некачественных подделок, которыми кишит сейчас Интернет. Но
                        стоит отличать подлинно отечественную продукцию от китайских экземпляров!</p>

                    <h4 class="text-center mt-5">Вас заинтересовало наше предложение?</h4>
                    <h4 class="text-center mb-4">Будем рады помочь!</h4>
                    <p class="text-center"><i>Остались вопросы? <br>Свяжись с нами по телефону:<br><a
                                href="tel:+79504725766">+7 (950) 472-57-66</a> -
                            Александр Игнатьев <br>Или напишите нам e-mail:
                            <a href="mailto:zakaz@gsbm-group.ru">zakaz@gsbm-group.ru</a></i>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
