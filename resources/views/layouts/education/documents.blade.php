@extends('layouts.education')

@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.sidebar.education.documents')
                    </div>

                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>@yield('page-title')</h2>
                            </div>

                            @yield('page-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
