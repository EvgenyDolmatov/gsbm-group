@extends('layouts.guest')

@section('title', 'Лицензии')
@section('keywords', 'Лицензии')
@section('description', 'Лицензии')

@section('content')
    <section id="certificates">

        <div class="header bg-white">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h1 class="page-header">Лицензии и свидетельства</h1>
                        <div class="page-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend suspendisse
                                viverra tempus. Pulvinar nullam egestas eleifend tincidunt nulla nunc pretium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xl container-fluid">
            <div class="section-content pt-sm-4 pt-0">
                <div class="row">
                    <!-- Certificate -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="document-thumb">
                            <div class="document-actions">
                                <div class="scale-btn"></div>
                                <div class="download-btn"></div>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate1.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Лицензия</p>
                        </div>
                    </div>
                    <!-- Certificate -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="document-thumb">
                            <div class="document-actions">
                                <div class="scale-btn"></div>
                                <div class="download-btn"></div>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate1.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Устав УЦ ООО «Геострой&#8209;Буммаш»</p>
                        </div>
                    </div>
                    <!-- Certificate -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="document-thumb">
                            <div class="document-actions">
                                <div class="scale-btn"></div>
                                <div class="download-btn"></div>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate1.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>План обучения на 2021</p>
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
