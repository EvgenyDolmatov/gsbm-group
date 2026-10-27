@extends('layouts.education.sveden')

@section('title', 'Платные образовательные услуги')
@section('page-title', 'Платные образовательные услуги')
@section('page-content')
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
@endsection
