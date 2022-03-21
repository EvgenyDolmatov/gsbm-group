@extends('layouts.education')

@section('title', 'Наши контакты')
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
                                <h2>Наши контакты</h2>
                            </div>

                            <p>Нужен контент ...</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
