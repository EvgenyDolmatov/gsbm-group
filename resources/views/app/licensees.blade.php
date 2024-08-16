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
                                <a href="{{asset('assets/app/img/certificates/certificate7.pdf')}}" class="download-btn"
                                   target="_blank"></a>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/certificate7.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Сертификат соответствия «Геострой&#8209;Буммаш»</p>
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
                                <a href="{{asset('documents/sout2024.pdf')}}"
                                   class="download-btn" target="_blank"></a>
                            </div>
                            <img src="{{asset('assets/app/img/certificates/sout2024.jpg')}}" alt>
                        </div>
                        <div class="document-title">
                            <p>Специальная оценка условий труда</p>
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
