@extends('layouts.education.sveden')

@section('title', 'Структура и органы управления образовательной организацией')
@section('page-title', 'Структура и органы управления образовательной организацией')
@section('page-content')
    <div class="mb-5" itemprop="structOrgUprav">
        <h3 itemprop="name">
            Генеральный директор ООО «Геострой-Буммаш» (единоличный исполнительный орган)
        </h3>
        <p>
            <strong>Руководитель (ФИО, должность):</strong>
            <span itemprop="fio">Лопатин Роман Владимирович</span>,
            <span itemprop="post">Генеральный директор</span>
        </p>
        <p>
            <strong>Место нахождения:</strong>
            <span itemprop="addressStr">614107, г. Пермь, ул. Хрустальная, д. 10А</span>
        </p>
        <p>
            <strong>Сайт:</strong>
            <a href="https://gsbm-group.ru" target="_blank" itemprop="site">https://gsbm-group.ru</a>
        </p>
        <p>
            <strong>E-mail:</strong>
            <a href="mailto:rlopatin@gsbm-group.ru" target="_blank" itemprop="email">rlopatin@gsbm-group.ru</a>
        </p>
        <p>
            <strong>Положение:</strong>
            <a href="{{asset('documents/sveden/00_УСТАВ_ООО.pdf')}}" target="_blank" itemprop="divisionClauseDocLink">
                Устав ООО
            </a>
        </p>
    </div>

    <div class="mb-5" itemprop="structOrgUprav">
        <h3 itemprop="name">
            Специализированное структурное образовательное подразделение (Учебный центр)
        </h3>
        <p>
            <strong>Руководитель (ФИО, должность):</strong>
            <span itemprop="fio">Рогожникова Юлия Александровна</span>,
            <span itemprop="post">руководитель учебного центра</span>
        </p>
        <p>
            <strong>Место нахождения:</strong>
            <span itemprop="addressStr">614107, г. Пермь, ул. Хрустальная, д. 10А</span>
        </p>
        <p>
            <strong>Сайт:</strong>
            <a href="https://gsbm-group.ru" target="_blank" itemprop="site">https://gsbm-group.ru</a>
        </p>
        <p>
            <strong>E-mail:</strong>
            <a href="mailto:yvashenko@gsbm-group.ru" target="_blank" itemprop="email">yvashenko@gsbm-group.ru</a>
        </p>
        <p>
            <strong>Положение:</strong>
            <a
                href="{{asset('documents/sveden/01_Положение_о_Учебном_центре.pdf')}}"
                target="_blank"
                itemprop="divisionClauseDocLink"
            >Положение о Учебном центре</a>
        </p>
    </div>

    <div class="mb-5" itemprop="structOrgUprav">
        <h3 itemprop="name">
            Педагогический совет (коллегиальный орган)
        </h3>
        <p>
            <strong>Руководитель (ФИО, должность):</strong>
            <span itemprop="fio">Председатель – Генеральный директор либо уполномоченное им лицо</span>
        </p>
        <p>
            <strong>Место нахождения:</strong>
            <span itemprop="addressStr">614107, г. Пермь, ул. Хрустальная, д. 10А</span>
        </p>
        <p>
            <strong>Положение:</strong>
            <a
                href="{{asset('documents/sveden/12_Положение_о_педагогическом_совете.pdf')}}"
                target="_blank"
                itemprop="divisionClauseDocLink"
            >Положение о педагогическом совете</a>
        </p>
    </div>

    <div class="mb-5" itemprop="structOrgUprav">
        <h3 itemprop="name">
            Общее собрание работников Учебного центра (коллегиальный орган)
        </h3>
        <p>
            <strong>Руководитель (ФИО, должность):</strong>
            <span itemprop="fio">Председатель – Генеральный директор либо уполномоченное им лицо</span>
        </p>
        <p>
            <strong>Место нахождения:</strong>
            <span itemprop="addressStr">614107, г. Пермь, ул. Хрустальная, д. 10А</span>
        </p>
        <p>
            <strong>Положение:</strong>
            <a
                href="{{asset('documents/sveden/13_Положение_об_общем_собрании_работников.pdf')}}"
                target="_blank"
                itemprop="divisionClauseDocLink"
            >Положение об общем собрании работников</a>
        </p>
    </div>
@endsection
