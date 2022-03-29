@extends('layouts.app')

@section('title', 'Главная')
@section('keywords', 'Главная')
@section('description', 'Главная')
@section('logo')
    <div class="logo">
        <a href="{{route('app.front-page')}}">
            <img src="{{asset('assets/app/img/logo.svg')}}" alt>
        </a>
    </div>
@endsection

@section('content')
    <!-- Promo -->
    <section id="promo">
        <div class="decor-gear"></div>
        <div class="promo-slider owl-carousel">

            <div class="slider-item">
                <div class="slide-image">
                    <div class="overlay-image"></div>
                    <img src="{{asset('assets/app/img/banner/slide1.jpg')}}" alt="">
                </div>
                <div class="slide-content">
                    <div class="container-xl container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <h2 class="title">Комплекс работ по монтажу технологического оборудования на ЦБП</h2>
                            </div>
                            <div class="col-lg-6 col-12">
                                <ul class="info-list-secondary">
                                    <li>Изготовление ж/б фундаментов под технологическое оборудование (заливка, рубка,
                                        резка, шлифовка, подливка)
                                    </li>
                                    <li>Изготовление опалубки</li>
                                    <li>Изготовление металлокаркаса</li>
                                    <li>Общестроительные работы</li>
                                    <li>Ведение строительного контроля за работами</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl container-fluid">
            <div class="slider-dots"></div>

            <div class="slider-btn">
                <a href="#feedback" class="btn btn-brand">Связаться с нами</a>
            </div>
        </div>
    </section>

    <!-- Services -->
    @if($services->count())
        <section id="service">
            <div class="header bg-white">
                <div class="container-xl container-fluid">
                    <h3 class="section-header">Наши услуги</h3>
                </div>
            </div>

            <div class="container-xl container-fluid">
                <div class="section-content">
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="tile active">
                                    <div class="tile-title">
                                        <a href="{{route('services.show-public', $service->slug)}}">
                                            <h4>{{$service->title}}</h4>
                                        </a>
                                    </div>

                                    <div class="tile-content" style="height: fit-content">
                                        <a href="{{route('services.show-public', $service->slug)}}">
                                            <div class="tile-image" style="opacity: 1">
                                                <div class="overlay-image"></div>
                                                <img src="{{$service->images->first()->getImage()}}"
                                                     alt="{{$service->title}}">
                                            </div>
                                        </a>

                                        {{--<div class="tile-action">
                                            <button class="expand-btn">
                                                <span class="arrow"></span>
                                            </button>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button type="button" id="more-services" class="btn btn-brand">
                        Еще услуги
                    </button>
                </div>
            </div>
        </section>
    @endif

    <!-- About -->
    <section id="about" class="bg-lg">
        <div class="header bg-white">
            <div class="container-xl container-fluid">
                <h3 class="section-header">О компании</h3>
            </div>
        </div>

        <div class="section-content bg-lg">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12 pr-lg-35">
                        <h2 class="title">Мы занимаемся ремонтом промышленных объектов и обучением рабочих
                            специальностей
                            уже 12 лет</h2>

                        <div class="about-btn">
                            <a href="{{route('app.about-page')}}" class="btn btn-brand">Подробнее о нас</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 pl-lg-35">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/about.jpg')}}" alt>
                        </div>
                        <div class="about-description">
                            <p>Компания ООО "Геострой-Буммаш" осуществляет полный спектр электромонтажных работ.</p>
                            <p>Обращаясь в нашу компанию, вы можете быть уверены, что получите оптимальное и продуманное
                                решение для вашего бизнеса в короткие сроки и в заданный бюджет.</p>
                            <p>Высокая квалификация, правильная мотивация и слаженная работа всех наших сотрудников
                                позволяет нам каждый день радовать Вас безупречно выполненной работой.</p>
                            <p>Компания постоянно совершенствует производственные и технологические процессы, налаживает
                                новые контакты с поставщиками и повышает уровень квалификации персонала.</p>
                            <p>ООО «Геострой-Буммаш» зарекомендовал себя как надежный партнер, наша компания — надежный
                                помощник в осуществлении самых сложных проектов.</p>
                        </div>

                        <div class="about-btn d-lg-none d-block">
                            <a href="{{route('app.about-page')}}" class="btn btn-brand">Подробнее о нас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section id="benefits" class="bg-lg">
        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Наши приемущества</h3>
            </div>
        </div>

        <div class="section-content bg-brand">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="benefit-item">
                            <div class="benefit-image">
                                <img src="{{asset('assets/app/img/icons_tool.svg')}}" alt>
                            </div>
                            <div class="benefit-title">
                                <h4>Опыт</h4>
                            </div>
                            <div class="benefit-description">
                                <p>Компания имеет огромный опыт по работе в сфере целлюлозо-бумажной промышленности,
                                    монтажу оборудования и металлоконструкций, высокоточным измерениям.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="benefit-item">
                            <div class="benefit-image">
                                <img src="{{asset('assets/app/img/icons_idea.svg')}}" alt>
                            </div>
                            <div class="benefit-title">
                                <h4>Сильная инженерная команда</h4>
                            </div>
                            <div class="benefit-description">
                                <p>Компания имеет огромный опыт по работе в сфере целлюлозо-бумажной промышленности,
                                    монтажу оборудования и металлоконструкций, высокоточным измерениям.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="benefit-item">
                            <div class="benefit-image">
                                <img src="{{asset('assets/app/img/icons_circle-arrow.svg')}}" alt>
                            </div>
                            <div class="benefit-title">
                                <h4>Осуществление полного цикла работ</h4>
                            </div>
                            <div class="benefit-description">
                                <p>Нашим преимуществом является возможность осуществления полного цикла работ от заявки
                                    до сдачи работающего оборудования.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="benefit-item">
                            <div class="benefit-image">
                                <img src="{{asset('assets/app/img/icons_protection.svg')}}" alt>
                            </div>
                            <div class="benefit-title">
                                <h4>Безопасное проведение работ</h4>
                            </div>
                            <div class="benefit-description">
                                <p>Безопасность проведения работ находиться на первом месте, работники и специалисты
                                    проходят обучение в собственном учебном центре.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section id="partners" class="bg-lg">
        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Наши партнеры</h3>
            </div>
        </div>

        <div class="section-content">
            @include('components.section-partners')
        </div>
    </section>

    <!-- Customers -->
    <section id="customers" class="bg-lg">
        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Наши клиенты</h3>
            </div>
        </div>

        <div class="section-content">
            @include('components.section-customers')
        </div>
    </section>


    <!-- Feedback -->
    <section id="feedback">
        <div class="decor-gear"></div>

        <div class="header">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Оставить заявку</h3>
            </div>
        </div>

        <div class="section-content">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12 order-2 order-md-1 order-sm-2">
                        <div class="feedback-title pr-md-70">
                            <h2 class="title">Оставьте ваши контакты и наш менеджер свяжется с вами</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 d-lg-block d-none order-1 order-md-2"></div>
                    <div class="col-md-6 col-12 order-1 order-md-3 order-sm-1">
                        <div class="feedback-right pr-md-70">
                            <div class="feedback-image">
                                <div class="overlay-image"></div>
                                <img src="{{asset('assets/app/img/feedback.jpg')}}" alt>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 order-4">
                        <div class="feedback-form pl-lg-35">
                            <form action="{{route('email.feedback')}}" method="post" novalidate>
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

                                <button type="submit" class="btn btn-brand">Оставить заявку</button>
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
