@extends('layouts.education')

@section('title', 'Образовательные стандарты и требования')
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
                                <h2>Образовательные стандарты и требования</h2>
                            </div>

                            <p>Федеральные государственные образовательные стандарты и федеральные государственные
                                требования при реализации основных программ профессионального обучения и дополнительных
                                профессиональных программ не применяются. Образовательные стандарты и самостоятельно
                                устанавливаемые требования не применяются. Образовательные программы разрабатываются с
                                учетом профессиональных стандартов и квалификационных требований.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
