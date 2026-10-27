@extends('layouts.education.documents')

@section('title', 'Документы')
@section('page-title', 'Документы')
@section('page-content')
    <a
        href="{{asset('documents/uc_polozhenie_ob_obrazovatelnom_uchrezhdenii.docx')}}"
        class="d-block link-primary mb-2"
        target="_blank"
    >
        Положение о специализированном структурном образовательном подразделении (учебном центре) Общества с
        ограниченной ответственностью «ГЕОСТРОЙ&#8209;БУММАШ»
    </a>

    <a
        href="{{asset('documents/uc_polozhenie_o_dop_obrazovanii.pdf')}}"
        class="d-block link-primary mb-2"
        target="_blank"
    >Положение о дополнительном образовании</a>

    <a
        href="{{asset('documents/uc_polozhenie_o_programmah.pdf')}}"
        class="d-block link-primary mb-2"
        target="_blank"
    >Положение об организации и проведении образовательных программ повышения квалификации</a>

    <a
        href="{{asset('documents/uc_polozhenie_o_personalnyh_dannyh.pdf')}}"
        class="d-block link-primary mb-2"
        target="_blank"
    >Положение о персональных данных</a>
@endsection
