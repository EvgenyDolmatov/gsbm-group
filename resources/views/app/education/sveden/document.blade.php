@extends('layouts.education.sveden')

@section('title', 'Документы')
@section('page-title', 'Документы')
@section('page-content')
    <p class="mb-5">
        Учебный центр является специализированным структурным образовательным подразделением ООО «Геострой-Буммаш», не
        является юридическим лицом и действует на основании Положения, утвержденного Генеральным директором (часть 6
        статьи 31 Федерального закона № 273-ФЗ).
    </p>

    <h3 class="mb-4">Список документов:</h3>

    <div class="d-flex justify-content-between align-items-center">
        <p>Устав ООО «Геострой-Буммаш»</p>
        <a
            itemprop="ustavDocLink"
            href="{{ asset('documents/sveden/00_УСТАВ_ООО.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Изменения в Устав ООО «Геострой-Буммаш» от 10.12.2024 г.</p>
        <a
            itemprop="ustavDocLink"
            href="{{ asset('documents/sveden/00_Изменение_устава_Геострой-Буммаш_Устав_500.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Положение об Учебном центре</p>
        <a
            href="{{ asset('documents/sveden/01_Положение_о_Учебном_центре.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Правила внутреннего распорядка обучающихся</p>
        <a
            itemprop="localActStud"
            href="{{ asset('documents/sveden/03_Правила_внутреннего_распорядка_обучающихся.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Правила внутреннего трудового распорядка</p>
        <a
            itemprop="localActOrder"
            href="{{ asset('documents/sveden/09_Правила_внутреннего_трудового_распорядка.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Коллективный договор - <strong>отсутствует</strong></p>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Правила приема на обучение</p>
        <a
            itemprop="priemDocLink"
            href="{{ asset('documents/sveden/02_Правила_приема_на_обучение.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Положение о режиме занятий обучающихся</p>
        <a
            itemprop="modeDocLink"
            href="{{ asset('documents/sveden/04_Положение_о_режиме_занятий_обучающихся.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Положение о формах, периодичности и порядке текущего контроля успеваемости,
            промежуточной и итоговой аттестации</p>
        <a
            itemprop="tekKontrolDocLink"
            href="{{ asset('documents/sveden/05_Положение_о_текущем_контроле_и_аттестации.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>
            Положение о порядке оформления возникновения, изменения, приостановления и прекращения образовательных
            отношений, порядке и основаниях перевода, отчисления и восстановления
        </p>
        <a
            itemprop="perevodDocLink vozDocLink"
            href="{{ asset('documents/sveden/06_Положение_о_возникновении_и_прекращении_отношений.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Отчет о результатах самообследования за 2025 год</p>
        <a
            itemprop="reportEduDocLink"
            href="{{ asset('documents/sveden/28_Отчет_о_самообследовании_за_2025_год.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Предписания органов, осуществляющих государственный контроль (надзор) в сфере
            образования - <strong>Предписаний нет</strong></p>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Положение о комиссии по урегулированию споров</p>
        <a
            href="{{ asset('documents/sveden/14_Положение_о_комиссии_по_урегулированию_споров.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Положение об использовании простой электронной подписи</p>
        <a
            href="{{ asset('documents/sveden/10_Положение_об_использовании_простой_электронной_подписи.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i></a>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <p>Положение о применении электронного обучения и дистанционных образовательных
            технологий</p>
        <a
            href="{{ asset('documents/sveden/22_Положение_об_электронном_обучении_и_ДОТ.pdf') }}"
            title="Скачать"
            target="_blank"
        ><i class="fas fa-download"></i>
        </a>
    </div>
@endsection
