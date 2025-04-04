@extends('layouts.guest')

@section('title', $service->title)
@section('keywords', '')
@section('description', '')

@section('content')
    <!-- Services -->
    <section id="service">

        <div class="header bg-white">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1 class="page-header">{{$service->title}}</h1>

                        @if($service->leaders->count())

                            <h2 class="mt-5">Наши руководители направления:</h2>

                            <div class="section-content row">
                                @foreach($service->leaders as $leader)
                                    <div class="col-lg-4 col-6">
                                        <div class="simple-tile">
                                            <div class="tile-image">
                                                <div class="overlay-image"></div>
                                                <img src="{{$leader->getPhoto()}}"
                                                     alt="{{$leader->getFullName()}}">
                                            </div>
                                            <div class="tile-title">
                                                <h4>{{$leader->getFullName()}}</h4>
                                            </div>
                                            <div class="tile-description">
                                                <p>{{$leader->position}}</p>
                                            </div>
                                            <div class="tile-contacts">
                                                <a href="tel:{{$leader->getPhoneLink()}}">{{$leader->phone}}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <div class="page-description">
                            <p>{!! $service->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xl container-fluid">
            <div class="section-content p-0">
                <div class="gallery-tiles">
                    @if($service->images->where('is_before')->count())
                        <h4>Было:</h4>
                        <div class="row">
                            @foreach($service->images->where('is_before') as $image)
                                <div class="col-lg-4 col-6">
                                    <div class="gallery-item" data-src="{{$image->getFullImage()}}">
                                        <div class="overlay-image"></div>
                                        <img src="{{$image->getImage()}}" alt="{{$service->title}}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <h4 class="mt-5">Стало:</h4>
                    @endif
                    <div class="row">
                        @foreach($service->images->where('is_before', false) as $image)
                            <div class="col-lg-4 col-6">
                                <div class="gallery-item" data-src="{{$image->getFullImage()}}">
                                    <div class="overlay-image"></div>
                                    <img src="{{$image->getImage()}}" alt="{{$service->title}}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificates -->
    <section id="certificates" class="bg-lg">
        <div class="header bg-white">
            <div class="container-xl container-fluid">
                <h3 class="section-header">Свидетельства</h3>
            </div>
        </div>

        <div class="section-content bg-lg">
            <div class="container-xl container-fluid">
                <div class="row">
                    @if($service->title == 'Работы по проектированию')
                        <!-- Certificate -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                    <a href="{{asset('assets/app/img/certificates/certificate1.pdf')}}"
                                       class="download-btn" target="_blank"></a>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate1.jpg')}}" alt>
                            </div>
                            <div class="document-title">
                                <p>Выписка СРО на проектирование</p>
                            </div>
                        </div>
                        <!-- Certificate -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                    <a href="{{asset('assets/app/img/certificates/certificate4.pdf')}}"
                                       class="download-btn" target="_blank"></a>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate4.jpg')}}" alt>
                            </div>
                            <div class="document-title">
                                <p>Выписка из реестра членов СРО</p>
                            </div>
                        </div>
                    @elseif($service->title == 'Сварочные работы')
                        <!-- Certificate -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                    <a href="{{asset('assets/app/img/certificates/certificate-92-02848.pdf')}}"
                                       class="download-btn" target="_blank"></a>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate-92-02848.jpg')}}" alt>
                            </div>
                            <div class="document-title">
                                <p>Свидетельство НАКС №АЦСТ-92-02848</p>
                            </div>
                        </div>
                        <!-- Certificate -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                    <a href="{{asset('assets/app/img/certificates/certificate9.pdf')}}" class="download-btn"
                                       target="_blank"></a>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate9.jpg')}}" alt>
                            </div>
                            <div class="document-title">
                                <p>Свидетельство НАКС №АЦСТ-92-02353</p>
                            </div>
                        </div>
                        <!-- Certificate -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                    <a href="{{asset('assets/app/img/certificates/certificate-92-02292.pdf')}}"
                                       class="download-btn" target="_blank"></a>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate-92-02292.jpg')}}" alt>
                            </div>
                            <div class="document-title">
                                <p>Свидетельство НАКС №АЦСТ-92-02292</p>
                            </div>
                        </div>
                        <!-- Certificate -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                    <a href="{{asset('assets/app/img/certificates/certificate8.pdf')}}" class="download-btn"
                                       target="_blank"></a>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate8.jpg')}}" alt>
                            </div>
                            <div class="document-title">
                                <p>Свидетельство НАКС №АЦСТ-92-02262</p>
                            </div>
                        </div>
                    @else
                        <!-- Certificate -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                    <a href="{{asset('assets/app/img/certificates/certificate4.pdf')}}" class="download-btn"
                                       target="_blank"></a>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate4.jpg')}}" alt>
                            </div>
                            <div class="document-title">
                                <p>Выписка из реестра членов СРО</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation -->
    <section id="consultation">
        <div class="section-content">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        {{--<div class="left-container">
                            <h2 class="page-header">Консультационная помощь</h2>
                            <p>В нашей Компании к вашим услугам специалисты, смогут ответить на сложный вопрос,
                                посоветовать
                                выход из затруднительной юридической ситуации, дать консультации. Мы помогаем клиентам
                                выявить
                                проблемы, определить опасные производственные факторы, оценить риски, создать
                                эффективные
                                программы обучения, разработать перспективные мероприятия по улучшению состояния в
                                организации.
                                Опытные специалисты не только расскажут, как правильно применять нормы и правила, но и
                                поделятся
                                практическим опытом в решении сложных ситуаций.</p>
                        </div>--}}
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="right-container">
                            <h2 class="page-header">Нужна консультация?</h2>
                            <form action="{{route('email.feedback-consult-data')}}" method="post">
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
    <div class="popup image-popup">
        <div class="image-container">
            <img src="#" alt="Certificate 1">
        </div>
    </div>

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
