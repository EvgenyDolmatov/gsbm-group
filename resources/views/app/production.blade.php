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
                        <h2 class="mb-4">Поддержи Российского производителя <br>ООО«Геострой-Буммаш»!</h2>
                        <p>Наша компания является участником Национального Союза «Буммаш».</p>
                        <p>Мы разработали новый продукт на рынке ЦБК в рамках программы импортозамещения и рады
                            предложить его Вам - ПАРОКОНДЕНСАТНЫЕ ГОЛОВКИ.</p>
                        <p>Ротационное соединение является ответственной частью оборудования, важного при эксплуатации
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
                            <h3 class="mb-5">Представляем наши парокондесатные головки</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production1.jpg')}}"
                                 style="border-radius: 10px"
                                 alt="Аналог ОСТ 454.00.000 ТО2">
                            <p class="text-sm-center mt-3">Аналог ОСТ 454.00.000 ТО2</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production2.jpg')}}"
                                 style="border-radius: 10px"
                                 alt="Аналог КАДАНТ">
                            <p class="text-sm-center mt-3">Аналог KADANT</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production3.jpg')}}"
                                 style="border-radius: 10px"
                                 alt="Аналог Deublin">
                            <p class="text-sm-center mt-3">Аналог Deublin</p>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <p class="mt-5">Благодаря прочной конструкции и качественным материалам исполнения, кольцевое уплотнение
                            способно выдерживать высокие скорости и угловое смещение.</p>
                        <p>Легкая конструкция упрощает процесс монтажа и демонтажа.</p>
                        <p>Вращающаяся головка способна компенсировать температурное расширение цапфы сушильного
                            цилиндра. Рассчитанная на давление 14 бар, температуру 232°C и скорость до 1400 об./мин.,
                            вращающаяся головка позволяет повысить рабочее давление и температуру на бумагоделательной и
                            картоноделательной машинах.</p>
                        <p>Установка этого оборудования не требует сложных манипуляций или специальных знаний, что
                            делает паровые головки очень популярными.</p>

                        <table class="table my-5">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center" style="background-color: #3c61bb">
                                    Наша пароконденсатная головка:
                                </th>
                                <th scope="col" class="text-center" style="background-color: #3c61bb">
                                    Приобретая нашу продукцию вы:
                                </th>
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

                    <div class="col-12">
                        <h2 class="mb-2">Преимущество нашей конструкции является:</h2>
                    </div>
                    <div class="col-lg-6 col-12 my-5">

                        <ul class="info-list-secondary mb-5">
                            <li>применение литья чугуна марки СЧ25 для корпуса</li>
                            <li>прижимное кольцо изготовлено из марки чугуна АЧВ (антифрикционный чугун)</li>
                            <li>центральная труба на выбор изготавливается из стали 12Х18Н10Т или стали 40Х</li>
                            <li>применяются высококачественные уплотнения Viton</li>
                            <li>прокладки изготовлены из терморасширенного графита (ПУТГ)</li>
                        </ul>

                        <table class="table mb-3">
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
                    <div class="col-lg-6 col-12 my-5">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production4.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
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

                    <h4 class="text-center mt-5">Вас заинтересовало наше предложение? Будем рады помочь!</h4>
                    <p class="text-center"><i>Остались вопросы? Свяжись с нами по телефону: <a
                                href="tel:+79504725766">+7&nbsp;(950)&nbsp;472&#8209;57&#8209;66</a> -
                            Александр&nbsp;Игнатьев <br>Или напишите нам e-mail:
                            <a href="mailto:zakaz@gsbm-group.ru">zakaz@gsbm-group.ru</a></i>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
