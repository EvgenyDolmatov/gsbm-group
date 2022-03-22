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
                    <div class="col-lg-6 col-12">
                        <h1 class="page-header">{{$service->title}}</h1>
                        <div class="page-description">
                            <p>{!! $service->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container-xl container-fluid">
            <div class="section-content p-0">
                <div class="gallery-tiles">
                    <div class="row">
                        @foreach($service->images as $image)
                            <div class="col-lg-4 col-6">
                                <div class="gallery-item">
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
                <h3 class="section-header">Сертификаты</h3>
            </div>
        </div>

        <div class="section-content bg-lg">
            <div class="container-xl container-fluid">
                <div class="row">
                    @if($service->title == 'Сварочные работы')
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate2.jpg')}}" alt>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate3.jpg')}}" alt>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate4.jpg')}}" alt>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate5.jpg')}}" alt>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate6.jpg')}}" alt>
                            </div>
                        </div>
                    @elseif($service->title == 'Работы по проектированию')
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate1.jpg')}}" alt>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate4.jpg')}}" alt>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="document-thumb">
                                <div class="document-actions">
                                    <div class="scale-btn"></div>
                                </div>
                                <img src="{{asset('assets/app/img/certificates/certificate4.jpg')}}" alt>
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
                        <div class="left-container">
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
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="right-container">
                            <h2 class="page-header">Нужна консультация?</h2>
                            <form action="#">
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
@endsection
