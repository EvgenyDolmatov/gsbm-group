@extends('layouts.education')

@section('title', 'Платные образовательные услуги')
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
                                <h2>Платные образовательные услуги</h2>
                            </div>

                            <ul class="info-list-secondary">
                                <li>
                                    <a
                                        href="{{asset('documents/sveden/07_Положение_о_порядке_оказания_платных_образовательных_услуг.pdf')}}"
                                        target="_blank"
                                    >Порядок оказания платных образовательных услуг</a>
                                </li>
                                <li>
                                    <a
                                        href="{{asset('documents/sveden/08_Образец_договора_об_оказании_платных_образовательных_услуг.pdf')}}"
                                        target="_blank"
                                    >Образец договора об оказании платных образовательных услуг</a>
                                </li>
                                <li>
                                    <a
                                        href="{{asset('documents/sveden/21')}}" {{-- TODO: Добавить ссылку на файл --}}
                                    target="_blank"
                                    >
                                        Приказ от 23.10.2026 № 10 «Об утверждении стоимости обучения по образовательным
                                        программам Учебного центра»
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
