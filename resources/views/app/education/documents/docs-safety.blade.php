@extends('layouts.education')

@section('title', 'Документы')
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
                                <h2>Документы</h2>
                            </div>

                            <a href="{{asset('documents/sout2024.pdf')}}"
                               class="d-block link-primary mb-2" target="_blank">
                                Сводная ведомость результатов проведения специальной оценки условий труда 2024
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
