@extends('layouts.education.sveden')

@section('title', 'Руководство')
@section('page-title', 'Руководство')
@section('page-content')
    <div class="mb-5" itemprop="structOrgUprav">
        <h3 itemprop="fio">Лопатин Роман Владимирович</h3>
        <p>
            <strong>Должность:</strong>
            <span itemprop="post">Генеральный директор ООО «Геострой-Буммаш»</span>
        </p>
        <p>
            <strong>Телефон:</strong>
            <a href="tel:+73422055003"><span itemprop="telephone">+7 (342) 205-50-03</span></a>
        </p>
        <p>
            <strong>E-mail:</strong>
            <a href="mailto:rlopatin@gsbm-group.ru" target="_blank">
                <span itemprop="email">rlopatin@gsbm-group.ru</span>
            </a>
        </p>
    </div>

    <div class="mb-5" itemprop="structOrgUprav">
        <h3 itemprop="fio">Рогожникова Юлия Александровна</h3>
        <p>
            <strong>Должность:</strong>
            <span itemprop="post">Руководитель учебного центра</span>
        </p>
        <p>
            <strong>Телефон:</strong>
            <a href="tel:+79824859262"><span itemprop="telephone">+7 (982) 485-92-62</span></a>
        </p>
        <p>
            <strong>E-mail:</strong>
            <a href="mailto:yvashenko@gsbm-group.ru" target="_blank">
                <span itemprop="email">yvashenko@gsbm-group.ru</span>
            </a>
        </p>
    </div>
@endsection
