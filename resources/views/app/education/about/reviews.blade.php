@extends('layouts.education.about')

@section('title', 'Отзывы клиентов')
@section('page-title', 'Отзывы клиентов')
@section('page-content')
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
@endsection

@section('popups')
    <div class="popup image-popup">
        <div class="image-container">
            <img src="#" alt="Certificate 1">
        </div>
    </div>
@endsection
