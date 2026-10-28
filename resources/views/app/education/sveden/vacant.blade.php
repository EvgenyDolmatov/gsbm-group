@extends('layouts.education.sveden')

@section('title', 'Вакантные места для приема (перевода) обучающихся')
@section('page-title', 'Вакантные места для приема (перевода) обучающихся')
@section('page-content')
    <div itemprop="vacant">
        <p>
            Таблица по каждой программе:
            вакантные места за счет бюджетных ассигнований —
            <span itemprop="numberBFVacant">0 (не предусмотрены)</span>;
            вакантные места по договорам с физическими и юридическими лицами —
            по данным Учебного центра –
            <span itemprop="numberPVacant">10 человек</span>.
        </p>
    </div>
@endsection
