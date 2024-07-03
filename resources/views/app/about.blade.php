@extends('layouts.guest')

@section('title', 'О нас')
@section('keywords', 'О нас')
@section('description', 'О нас')

@section('content')
    <section id="about">
        <div class="header bg-white">
            <div class="container-xl container-fluid">
                <h1 class="page-header text-center">ООО “Геострой - Буммаш”</h1>
            </div>
        </div>
        <div class="container-xl container-fluid">
            <div class="section-content">

                <div class="row mb-5">
                    <div class="col-xl-8 col-lg-7 col-12 order-lg-0 order-1">
                        <div class="about-leader-text">
                            <p>Уважаемые коллеги!</p>
                            <p>Мы рады приветствовать Вас на нашем сайте.</p>
                            <p style="text-align: justify">Важность бумаги и картона в наше время очень сложно недооценить.
                                Сейчас бумага является не просто способом сохранения данных и передачи их своим родным и
                                коллегам. Без бумаги в&nbsp;современном мире не работает практически ни один процесс: для
                                логистики картон и бумага&nbsp;– это оформление, упаковка и хранение, для производства
                                бумага&nbsp;– это сопровождение и учет, для жизни бумага и картон&nbsp;– это сумки и посуда,
                                а для ремонта&nbsp;– это гипсокартон, обои и прочие покрытия. Данный список можно продолжать
                                и с&nbsp;трудом закончить. Мы являемся компанией, которая уже внесла значительный вклад
                                в&nbsp;развитие российского рынка бумаги и картона и продолжает идти в данном направлении. А
                                также занимается разработкой аналогов иностранному оборудованию для возрождения российского
                                производства агрегатов ЦБП. И наше сотрудничество с Вами&nbsp;– это еще один повод сказать,
                                что мы все делаем правильно.</p>

                            <p style="margin-top:30px;text-align:right;font-style: italic">С уважением,<br>
                                Генеральный&nbsp;директор ООО&nbsp;«Геострой-Буммаш»<br>
                                Лопатин&nbsp;Роман&nbsp;Владимирович</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-12 order-lg-1 order-0">
                        <img src="{{asset('assets/app/img/supervisors/leader1.jpg')}}" alt="Лопатин Роман Владимирович">
                    </div>
                </div>

                <p class="text-center">ООО «Геострой-Буммаш» - молодая быстро развивающаяся компания, с перспективными
                    проектами по развитию бумагоделательной и деревообрабатывающей отрасли.
                    Главное для нашей компании – люди, которые создают проект, сопровождают его, монтируют своими руками
                    и запускают, скрупулёзно и терпеливо собирая воедино тысячи деталей, заставляя их крутиться с одной
                    скоростью.
                </p>
                <div class="about-image">
                    <div class="overlay-image"></div>
                    <img src="{{asset('assets/app/img/about-page.jpg')}}" alt="О нас">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Directions -->
    <section id="main-directions">
        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Основные направления</h3>
            </div>
        </div>

        <div class="section-content">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <ul class="page-list pr-lg-35">
                            <li class="page-list-item">Комплекс работ по монтажу технологического оборудования ЦБП</li>
                            <li class="page-list-item">Монтаж технологических трубопроводов</li>
                            <li class="page-list-item">Монтаж металлоконструкций любой сложности</li>
                            <li class="page-list-item">Изготовление ж/б фундаментов под технологическое оборудование</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-12">
                        <ul class="page-list pl-lg-35">
                            <li class="page-list-item">Сварочные работы</li>
                            <li class="page-list-item">Высокоточные измерения и выверка оборудования</li>
                            <li class="page-list-item">Работы по проектированию</li>
                            <li class="page-list-item">Ремонт технологического оборудования</li>
                            <li class="page-list-item">Электромонтажные работы и автоматика</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leaders of Directions -->
    <section id="leaders">
        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Руководители направлений</h3>
            </div>
        </div>

        <div class="section-content">
            <div class="container-xl container-fluid">
                <div class="row">
                    <!-- Tile Item -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="simple-tile">
                            <div class="tile-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/supervisors/leader1.jpg')}}" alt="Лопатин Роман">
                            </div>
                            <div class="tile-title">
                                <h4>Лопатин Роман</h4>
                            </div>
                            <div class="tile-description">
                                <p>Генеральный директор</p>
                            </div>
                            <div class="tile-contacts">
                                <a href="mailto:rlopatin@gsbm-group.ru">rlopatin@gsbm-group.ru</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tile Item -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="simple-tile">
                            <div class="tile-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/supervisors/leader2.jpg')}}" alt="Соснин Денис">
                            </div>
                            <div class="tile-title">
                                <h4>Соснин Денис</h4>
                            </div>
                            <div class="tile-description">
                                <p>Зам. генерального директора</p>
                            </div>
                            <div class="tile-contacts">
                                <a href="mailto:dsosnin@gsbm-group.ru">dsosnin@gsbm-group.ru</a>
                                <a href="tel:+79519385356">+7 951 938 5356</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tile Item -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="simple-tile">
                            <div class="tile-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/no-image.jpg')}}" alt="Коровин Пётр">
                            </div>
                            <div class="tile-title">
                                <h4>Коровин Пётр</h4>
                            </div>
                            <div class="tile-description">
                                <p>И.О. Генерального директора</p>
                            </div>
                            <div class="tile-contacts">
                                <a href="mailto:pkorovin@gsbm-group.ru">pkorovin@gsbm-group.ru</a>
                                <a href="tel:+79027909924">+7 902 790 9924</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tile Item -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="simple-tile">
                            <div class="tile-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/supervisors/leader3.jpg')}}" alt="Шепелев Алексей">
                            </div>
                            <div class="tile-title">
                                <h4>Шепелев Алексей</h4>
                            </div>
                            <div class="tile-description">
                                <p>Главный сварщик</p>
                            </div>
                            <div class="tile-contacts">
                                <a href="mailto:ashepelev@gsbm-group.ru">ashepelev@gsbm-group.ru</a>
                                <a href="tel:+79803560796">+7 980 356 0796</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tile Item -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="simple-tile">
                            <div class="tile-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/supervisors/leader4.jpg')}}" alt="Гетте Максим">
                            </div>
                            <div class="tile-title">
                                <h4>Гетте Максим</h4>
                            </div>
                            <div class="tile-description">
                                <p>Начальник службы высокоточных измерений</p>
                            </div>
                            <div class="tile-contacts">
                                <a href="mailto:mgette@gsbm-group.ru">mgette@gsbm-group.ru</a>
                                <a href="tel:+79223166799">+7 922 316 6799</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tile Item -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="simple-tile">
                            <div class="tile-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/supervisors/leader5.jpg')}}" alt="Лопатин Роман">
                            </div>
                            <div class="tile-title">
                                <h4>Игнатьев Александр</h4>
                            </div>
                            <div class="tile-description">
                                <p>Начальник ПТО</p>
                            </div>
                            <div class="tile-contacts">
                                <a href="mailto:aignatev@gsbm-group.ru">aignatev@gsbm-group.ru</a>
                                <a href="tel:+79504725766">+7 950 472 5766</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tile Item -->
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="simple-tile">
                            <div class="tile-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/supervisors/leader06.jpg')}}" alt="Кузьмин Сергей">
                            </div>
                            <div class="tile-title">
                                <h4>Кузьмин Сергей</h4>
                            </div>
                            <div class="tile-description">
                                <p>Руководитель проектов</p>
                            </div>
                            <div class="tile-contacts">
                                <a href="mailto:skuzmin@gsbm-group.ru">skuzmin@gsbm-group.ru</a>
                                <a href="tel:+79247025857">+7 924 702 5857</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners -->
    <section id="our-partners">
        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Наши партнеры</h3>
            </div>
        </div>

        <div class="section-content bg-lg">
            @include('components.section-partners')
        </div>
    </section>

    <!-- Customers -->
    <section id="our-customers">
        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Наши клиенты</h3>
            </div>
        </div>

        <div class="section-content">
            @include('components.section-customers')
        </div>
    </section>

    <section id="about-feedback">
        <div class="overlay-image"></div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="feedback-title pr-md-70">
                            <h2 class="title">Хотите стать нашим партнером?</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="feedback-form pl-md-70">
                            <form action="{{route('email.feedback-partner-data')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Имя</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-label">Телефон</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>

                                <div class="form-group mt-4">
                                    <textarea id="comment" name="comment" rows="4"
                                              class="form-control" placeholder="Что вас интересует?"></textarea>
                                </div>

                                <button type="submit" class="btn btn-brand mt-4">Оставить заявку</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('popups')
    @if(session()->has('success'))
        <div class="alert-wrap">
            <div class="alert alert-success">
                <span>{{session('success')}}</span>
                <span class="close">x</span>
            </div>
        </div>
    @endif

    @if($errors->any())
        <div class="alert-wrap">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <span>{{$error}}</span>
                    <span class="close">x</span>
                </div>
            @endforeach
        </div>
    @endif
@endsection
