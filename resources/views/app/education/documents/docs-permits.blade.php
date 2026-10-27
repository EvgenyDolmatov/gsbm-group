@extends('layouts.education.documents')

@section('title', 'Разрешительные документы')
@section('page-title', 'Разрешительные документы')
@section('page-content')
    <a
        href="{{asset('documents/uchebnyj_centr_licenziya.pdf')}}"
        class="d-block link-primary mb-2"
        target="_blank"
    >Лицензия с приложением ООО&nbsp;«Геострой&#8209;Буммаш»</a>

    <a
        href="{{asset('documents/uchebnyj_centr_akkreditaciya.jpg')}}"
        class="d-block link-primary mb-2"
        target="_blank"
    >Аккредитация ООО&nbsp;«Геострой&#8209;Буммаш»</a>
@endsection
