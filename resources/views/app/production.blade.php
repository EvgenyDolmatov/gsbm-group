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
                    <div class="col-lg-7 col-12">
                        <h2 class="mb-4">Поддержи Российского производителя <br>ООО«Геострой-Буммаш!»</h2>
                        <p>Пароконденсатная головка - ответственная часть оборудования для бумагоделательных и
                            картоноделательных машин (ПКГ-0000.000) для высокоэффективной работы сушильных
                            цилиндров.</p>
                        <p>ООО «Геострой-Буммаш» разработал и изготовил аналог пароконденсатной головки KADANT, а также
                            аналог паровой головки по ОСТ 454.00.000 ТО2.</p>
                    </div>
                    <div class="col-lg-5 col-12 mb-5">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production-main.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="page-description">
                            <p>Эти ротационные соединения успешно заменяют импортные аналоги таких фирм как Deublin,
                                Voith, Johnson Kadant, Fomat и пр.</p>
                            <p>Благодаря прочной конструкции и качественным материалам исполнения, кольцевое уплотнение
                                способно выдерживать высокие скорости и угловое смещение.</p>
                            <p>Легкая конструкция упрощает процесс монтажа и демонтажа.</p>
                            <p>Вращающаяся головка способна компенсировать температурное расширение цапфы сушильного
                                цилиндра. Рассчитанная на давление 14 бар, температуру 232°C и скорость до 1400
                                об./мин., вращающаяся головка позволяет повысить рабочее давление и температуру на
                                бумагоделательной и картоноделательной машинах.</p>
                            <p>Установка этого оборудования не требует сложных манипуляций или специальных знаний, что
                                делает паровые головки очень популярными.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production1.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production2.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/production/production3.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
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
                        <h2 class="mb-4">Особенности конструкции:</h2>
                        <ul class="info-list-secondary">
                            <li>уникальная конструкция для превосходной и стабильной работы</li>
                            <li>высокая жесткость и прочность, технологичность конструкции</li>
                            <li>обеспечит надежную и бесперебойную работу оборудования</li>
                            <li>увеличение эффективности сушки</li>
                            <li>снимаете риски выхода из строя сушильных цилиндров</li>
                            <li>сбалансированная конструкция предполагает меньший износ уплотнительного кольца</li>
                            <li>легко устанавливать, а еще легче эксплуатировать</li>
                            <li>требуется меньших капитальных затрат и эксплуатационных расходов</li>
                            <li>долгий срок службы</li>
                            <li>2 года гарантии</li>
                            <li>может быть установлена на существующие корзины Kadant и не только</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
