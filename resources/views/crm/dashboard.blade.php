@extends('layouts.account')

@section('title', 'Геострой-Буммаш CRM')
@section('content')
    <section id="add-services">
        <div class="container-xl container-fluid">
            <div class="section-content">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-12">
                        @include('layouts.components.crm-sidebar')
                    </div>
                    <!-- Page Content -->
                    <div class="col-lg-7 offset-xl-1 offset-0 col-12">
                        <div class="page-right-content">
                            <div class="service-title">
                                <h2>Аккаунт</h2>
                            </div>
                            <p>Здравствуйте, {{$user->name}}! Добро пожаловать в CRM-систему!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
