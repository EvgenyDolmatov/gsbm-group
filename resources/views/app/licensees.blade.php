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
                                <a href="{{asset('assets/app/img/certificates/certificate1.pdf')}}" class="download-btn"
                                   target="_blank"></a>
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
                                <a href="{{asset('assets/app/img/certificates/certificate2.pdf')}}" class="download-btn"
                                   target="_blank"></a>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate2.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Свидетельство МП «Геострой&#8209;Буммаш»</p>
                        </div>
                    </div>
                    <!-- Certificate -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="document-thumb">
                            <div class="document-actions">
                                <div class="scale-btn"></div>
                                <a href="{{asset('assets/app/img/certificates/certificate3.pdf')}}" class="download-btn"
                                   target="_blank"></a>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate3.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Свидетельство СК «Геострой&#8209;Буммаш»</p>
                        </div>
                    </div>
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
                    <!-- Certificate -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="document-thumb">
                            <div class="document-actions">
                                <div class="scale-btn"></div>
                                <a href="{{asset('assets/app/img/certificates/certificate5.jpg')}}" class="download-btn"
                                   target="_blank"></a>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate5.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Свидетельство НАКС №АЦСТ-92-02015</p>
                        </div>
                    </div>
                    <!-- Certificate -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="document-thumb">
                            <div class="document-actions">
                                <div class="scale-btn"></div>
                                <a href="{{asset('assets/app/img/certificates/certificate6.jpg')}}" class="download-btn"
                                   target="_blank"></a>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate6.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Свидетельство НАКС №АЦСТ-92-02016</p>
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
