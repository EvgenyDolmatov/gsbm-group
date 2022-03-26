@extends('layouts.education')

@section('title', 'Отзывы клиентов')
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.education-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>Отзывы клиентов</h2>
                            </div>

                            <div class="container-xl container-fluid">
                                <div class="section-content pt-sm-4 pt-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="document-thumb">
                                                <div class="document-actions">
                                                    <div class="scale-btn"></div>
                                                </div>
                                                <img src="{{asset('reviews/education/review_baranov.jpg')}}" alt>
                                            </div>
                                            <div class="document-title">
                                                <p>Сергей Баранов<br>Руководитель предприятия</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="document-thumb">
                                                <div class="document-actions">
                                                    <div class="scale-btn"></div>
                                                </div>
                                                <img src="{{asset('reviews/education/review_nazarov.jpg')}}" alt>
                                            </div>
                                            <div class="document-title">
                                                <p>Илья Назаров<br>Электрогазосварщик</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="document-thumb">
                                                <div class="document-actions">
                                                    <div class="scale-btn"></div>
                                                </div>
                                                <img src="{{asset('reviews/education/review_starkov.jpg')}}" alt>
                                            </div>
                                            <div class="document-title">
                                                <p>Александр Старков<br>Мастер СМР</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
