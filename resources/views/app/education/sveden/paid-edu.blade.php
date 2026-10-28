@extends('layouts.education.sveden')

@section('title', 'Платные образовательные услуги')
@section('page-title', 'Платные образовательные услуги')
@section('page-content')
    <ul class="info-list-secondary">
        <li>
            <a
                itemprop="paidEduDocLink"
                href="{{ asset('documents/sveden/07_Положение_о_порядке_оказания_платных_образовательных_услуг.pdf') }}"
                target="_blank"
            >Порядок оказания платных образовательных услуг</a>
        </li>
        <li>
            <a
                itemprop="paidEduDocLink"
                href="{{ asset('documents/sveden/08_Образец_договора_об_оказании_платных_образовательных_услуг.pdf') }}"
                target="_blank"
            >Образец договора об оказании платных образовательных услуг</a>
        </li>
        <li>
            <a
                itemprop="paidEduDocLink"
                href="#" {{-- TODO: Добавить ссылку на файл 21 --}}
                target="_blank"
            >
                Приказ от 23.10.2026 № 10 «Об утверждении стоимости обучения по образовательным программам Учебного
                центра»
            </a>
        </li>
        <li>
            <a
                itemprop="paidEduDocLink"
                href="#" {{-- TODO: Добавить ссылку на файл 21а --}}
                target="_blank"
            >
                Приказ от 26.10.2026 № 15 «О внесении изменений в приказ от 23.10.2026 № 10» (стоимость обучения по
                программам № 34–37)
            </a>
        </li>
    </ul>
@endsection
