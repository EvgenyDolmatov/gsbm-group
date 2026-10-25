@extends('layouts.education')

@section('title', 'Финансово-хозяйственная деятельность')
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
                                <h2>Финансово-хозяйственная деятельность</h2>
                            </div>

                            <p>
                                Образовательная деятельность за счет бюджетных ассигнований федерального бюджета,
                                бюджетов субъектов Российской Федерации, местных бюджетов не осуществляется.
                            </p>

                            <p>
                                Объем образовательной деятельности по договорам с физическими и юридическими лицами,
                                поступление и расходование финансовых и материальных средств за 2025 год, смета (план
                                ФХД) на 2026 год.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
