@extends('layouts.education.sveden')

@section('title', 'Образование')
@section('page-title', 'Образование')
@section('page-content')
    <p>
        Реализуемые образовательные программы: основные программы профессионального обучения (профессиональная
        подготовка, переподготовка, повышение квалификации рабочих и служащих); дополнительные профессиональные
        программы (повышение квалификации, профессиональная переподготовка).
    </p>

    <p>
        Формы обучения: очная, очно-заочная, заочная, в том числе с применением электронного обучения и дистанционных
        образовательных технологий.
    </p>

    <p>
        Государственная аккредитация: образовательные программы профессионального обучения и дополнительные
        профессиональные программы государственной аккредитации не подлежат.
    </p>

    <p>
        Обучение по охране труда: ООО «Геострой-Буммаш» включено в реестр организаций, оказывающих услуги в области
        охраны труда (регистрационный номер 7000; Правила аккредитации, утвержденные постановлением Правительства
        Российской Федерации от 16.12.2021 № 2334).
    </p>

    <p>
        Реализуемые программы (на сайте размещаются только программы, которые Учебный центр реализует в настоящее время;
        перечень согласован 20.10.2026):
    </p>

    {{-- ПРОГРАММА 1 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 1</h5>
        <h4 class="mb-3" itemprop="eduProf">
            Программа А «Общие вопросы охраны труда и функционирования системы управления охраной труда»
        </h4>
        <p>
            <strong>Вид программы:</strong>
            <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span>
        </p>
        <p>
            <strong>Документ по окончании:</strong>
            протокол проверки знания требований охраны
            труда
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П01_Программа_А_Общие_вопросы_охраны_труда_и_СУОТ.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 2 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 2</h5>
        <h4 class="mb-3" itemprop="eduProf">
            Программа Б «Безопасные методы и приемы выполнения работ при воздействии вредных и (или) опасных
            производственных факторов, источников опасности, идентифицированных в рамках специальной оценки условий
            труда и оценки профессиональных рисков»
        </h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span>
        </p>
        <p>
            <strong>Документ по окончании:</strong>
            протокол проверки знания требований охраны
            труда
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П02_Программа_Б_Безопасные_методы_при_воздействии_вредных_факторов.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 3 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 3</h5>
        <h4 class="mb-3" itemprop="eduProf">
            Программа В «Безопасные методы и приемы выполнения работ, связанных с эксплуатацией подъемных сооружений»
        </h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П03_Программа_В_Работы_с_подъемными_сооружениями.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 4 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 4</h5>
        <h4 class="mb-3" itemprop="eduProf">
            Программа В «Безопасные методы и приемы выполнения строительных работ, в том числе: окрасочные работы;
            электросварочные и газосварочные работы»
        </h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П04_Программа_В_Строительные_окрасочные_сварочные_работы.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 5 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 5</h5>
        <h4 class="mb-3" itemprop="eduProf">
            Программа В «Безопасные методы и приемы работ с ручным инструментом, в том числе с пиротехническим»
        </h4>
        <p>
            <strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span>
        </p>
        <p>
            <strong>Документ по окончании:</strong> протокол проверки знания требований охраны труда
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П05_Программа_В_Работы_с_ручным_инструментом.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 6 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 6</h5>
        <h4 class="mb-3" itemprop="eduProf">
            Обучение безопасным методам и приемам выполнения работ в ограниченных и замкнутых пространствах
        </h4>
        <p>
            <strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">очно-заочная (смешанная): теория — через СДО, практические занятия — очно в учебном
                классе или на учебной площадке (ул. Дачная, 18)</span>
        </p>
        <p>
            <strong>Документ по окончании:</strong> протокол проверки знания требований охраны труда
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П06_Работы_в_ограниченных_и_замкнутых_пространствах.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 7 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 7</h5>
        <h4 class="mb-3" itemprop="eduProf">Использование (применение) средств индивидуальной защиты</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">очно-заочная (смешанная): теория — через СДО, практические
            занятия по применению СИЗ — очно в учебном классе или на учебной площадке (ул. Дачная, 18)</span>
        </p>
        <p>
            <strong>Документ по окончании:</strong> протокол проверки знания требований охраны труда
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П07_Использование_применение_СИЗ.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 8 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 8</h5>
        <h4 class="mb-3" itemprop="eduProf">«Оказание первой помощи пострадавшим»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">очно-заочная (смешанная): теория — через СДО, практические
            занятия на манекенах-тренажерах — очно</span>
        </p>
        <p>
            <strong>Документ по окончании:</strong> протокол проверки знания требований охраны труда
        </p>
        <p><strong>Преподаватель:</strong> Рогожникова Ю.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П08_Оказание_первой_помощи_пострадавшим.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 9 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 9</h5>
        <h4 class="mb-3" itemprop="eduProf">
            «Обучение для лиц, на которых возложена трудовая функция по проведению противопожарного инструктажа»
        </h4>
        <p>
            <strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа
                повышения квалификации</span>
        </p>
        <p><strong>Объем, ч:</strong> 40</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> удостоверение о повышении квалификации</p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П09_ПК_Лица_проводящие_противопожарный_инструктаж.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 10 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 10</h5>
        <h4 class="mb-3" itemprop="eduProf">«Гражданская оборона и защита от чрезвычайных ситуаций»</h4>
        <p>
            <strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа
                профессиональной переподготовки</span>
        </p>
        <p><strong>Объем, ч:</strong> 256</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> диплом о профессиональной переподготовке</p>
        <p><strong>Преподаватель:</strong> Соснин Д.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П10_ПП_Гражданская_оборона_и_защита_от_ЧС.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 11 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 11</h5>
        <h4 class="mb-3" itemprop="eduProf">«Стропальщик»</h4>
        <p><strong>Вид программы:</strong> <span
                itemprop="eduLevel">основная программа профессионального обучения</span></p>
        <p><strong>Объем, ч:</strong> 250</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">очно-заочная (смешанная): теория — через СДО, практические
            занятия — очно на учебной площадке (ул. Дачная, 18)</span>
        </p>
        <p><strong>Документ по окончании:</strong> свидетельство о профессии рабочего, должности
            служащего</p>
        <p><strong>Преподаватель:</strong> Иванов В.П.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П11_ПО_Стропальщик.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 12 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 12</h5>
        <h4 class="mb-3" itemprop="eduProf">
            Программа В «Безопасные методы и приемы выполнения работ на высоте»
        </h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 24</p>
        <p>
            <strong>Форма обучения, ЭО и ДОТ:</strong>
            <span itemprop="eduForm">очно-заочная (смешанная): теория — через СДО, практические
            занятия на учебном оборудовании — очно на учебной площадке (ул. Дачная, 18)</span>
        </p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда; удостоверение о допуске к работам на высоте</p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П12_Программа_В_Работы_на_высоте.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 13 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 13</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения пожароопасных
            работ»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П13_Программа_В_Пожароопасные_работы.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 14 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 14</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения огневых работ»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П14_Программа_В_Огневые_работы.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 15 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 15</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения газоопасных
            работ»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П15_Программа_В_Газоопасные_работы.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 16 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 16</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения работ при
            размещении, монтаже, техническом обслуживании и ремонте технологического
            оборудования (включая технологическое оборудование)»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П16_Программа_В_Технологическое_оборудование.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 17 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 17</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения работ в
            электроустановках»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Колесников Н.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П17_Программа_В_Работы_в_электроустановках.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 18 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 18</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения ремонтных, монтажных
            и демонтажных работ зданий и сооружений»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Иванов В.П.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П18_Программа_В_Ремонтные_монтажные_демонтажные_работы.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 19 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 19</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения работ, связанных с
            эксплуатацией тепловых энергоустановок»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П19_Программа_В_Тепловые_энергоустановки.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 20 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 20</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения работ, связанных с
            эксплуатацией сосудов, работающих под избыточным давлением»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П20_Программа_В_Сосуды_под_давлением.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 21 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 21</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения земляных работ»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Иванов В.П.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П21_Программа_В_Земляные_работы.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 22 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 22</h5>
        <h4 class="mb-3" itemprop="eduProf">Программа В «Безопасные методы и приемы выполнения работ, связанных с
            опасностью воздействия сильнодействующих и ядовитых веществ»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">обучение по охране труда (Правила № 2464)</span>
        </p>
        <p><strong>Объем, ч:</strong> 16</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> протокол проверки знания требований охраны
            труда</p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П22_Программа_В_Сильнодействующие_и_ядовитые_вещества.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 23 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 23</h5>
        <h4 class="mb-3" itemprop="eduProf">«Монтажник технологического оборудования и связанных с ним
            конструкций»</h4>
        <p><strong>Вид программы:</strong> <span
                itemprop="eduLevel">основная программа профессионального обучения</span></p>
        <p><strong>Объем, ч:</strong> 250</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span itemprop="eduForm">очно-заочная (смешанная): теория — через
            СДО, практические занятия — очно на учебной площадке (ул. Дачная, 18)</span></p>
        <p><strong>Документ по окончании:</strong> свидетельство о профессии рабочего, должности
            служащего</p>
        <p><strong>Преподаватель:</strong> Соснин Д.А., Иванов В.П., Рогожникова Ю.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П23_ПО_Монтажник_технологического_оборудования.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 24 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 24</h5>
        <h4 class="mb-3" itemprop="eduProf">«Рабочий люльки подъемника (вышки)»</h4>
        <p><strong>Вид программы:</strong> <span
                itemprop="eduLevel">основная программа профессионального обучения</span></p>
        <p><strong>Объем, ч:</strong> 120</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span itemprop="eduForm">очно-заочная (смешанная): теория — через
            СДО, практические занятия — очно на учебной площадке (ул. Дачная, 18)</span></p>
        <p><strong>Документ по окончании:</strong> свидетельство о профессии рабочего, должности
            служащего</p>
        <p><strong>Преподаватель:</strong> Иванов В.П., Рогожникова Ю.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П24_ПО_Рабочий_люльки_подъемника_(вышки).pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 25 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 25</h5>
        <h4 class="mb-3" itemprop="eduProf">«Электрогазосварщик»</h4>
        <p><strong>Вид программы:</strong> <span
                itemprop="eduLevel">основная программа профессионального обучения</span></p>
        <p><strong>Объем, ч:</strong> 142</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span itemprop="eduForm">очно-заочная (смешанная): теория — через
            СДО, практические занятия — очно на учебной площадке (ул. Дачная, 18)</span></p>
        <p><strong>Документ по окончании:</strong> свидетельство о профессии рабочего, должности
            служащего</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П25_ПО_Электрогазосварщик.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 26 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 26</h5>
        <h4 class="mb-3" itemprop="eduProf">«Газорезчик»</h4>
        <p><strong>Вид программы:</strong> <span
                itemprop="eduLevel">основная программа профессионального обучения</span></p>
        <p><strong>Объем, ч:</strong> 250</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span itemprop="eduForm">очно-заочная (смешанная): теория — через
            СДО, практические занятия — очно на учебной площадке (ул. Дачная, 18)</span></p>
        <p><strong>Документ по окончании:</strong> свидетельство о профессии рабочего, должности
            служащего</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В., Рогожникова Ю.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П26_ПО_Газорезчик.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 27 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 27</h5>
        <h4 class="mb-3" itemprop="eduProf">«Общие требования промышленной безопасности (А.1)»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
            квалификации</span></p>
        <p><strong>Объем, ч:</strong> 72</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> удостоверение о повышении квалификации</p>
        <p><strong>Преподаватель:</strong> Федоров А.И., Соснин Д.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П27_ПК_ПБ_А.1_Общие_требования_промышленной_безопасности.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 28 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 28</h5>
        <h4 class="mb-3" itemprop="eduProf">«Проектирование, строительство, реконструкция, техническое
            перевооружение, капитальный ремонт, консервация и ликвидация опасных
            производственных объектов нефтегазоперерабатывающих и нефтехимических производств
            (Б.1.10)»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
            квалификации</span></p>
        <p><strong>Объем, ч:</strong> 72</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> удостоверение о повышении квалификации</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П28_ПК_ПБ_Б.1.10_Нефтегазопереработка_и_нефтехимия.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 29 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 29</h5>
        <h4 class="mb-3" itemprop="eduProf">«Безопасное ведение газоопасных, огневых и ремонтных работ
            (Б.1.11)»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
            квалификации</span></p>
        <p><strong>Объем, ч:</strong> 72</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> удостоверение о повышении квалификации</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В., Иванов В.П.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П29_ПК_ПБ_Б.1.11_Газоопасные_огневые_ремонтные_работы.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 30 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 30</h5>
        <h4 class="mb-3" itemprop="eduProf">«Проектирование, строительство, реконструкция, капитальный ремонт и
            техническое перевооружение опасных производственных объектов, изготовление, монтаж
            (демонтаж), обслуживание и ремонт (модернизация) с применением сварки и наладка
            оборудования, работающего под избыточным давлением, используемого на опасных
            производственных объектах (Б.8.6)»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
            квалификации</span></p>
        <p><strong>Объем, ч:</strong> 72</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> удостоверение о повышении квалификации</p>
        <p><strong>Преподаватель:</strong> Шепелев А.В.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П30_ПК_ПБ_Б.8.6_Оборудование_под_давлением.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 31 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 31</h5>
        <h4 class="mb-3" itemprop="eduProf">«Эксплуатация опасных производственных объектов, на которых
            используются подъемные сооружения (Б.9.3)»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
            квалификации</span></p>
        <p><strong>Объем, ч:</strong> 72</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p><strong>Документ по окончании:</strong> удостоверение о повышении квалификации</p>
        <p><strong>Преподаватель:</strong> Соснин Д.А., Иванов В.П.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П31_ПК_ПБ_Б.9.3_Подъемные_сооружения.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 32 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 32</h5>
        <h4 class="mb-3" itemprop="eduProf">«Подсобный рабочий»</h4>
        <p><strong>Вид программы:</strong> <span
                itemprop="eduLevel">основная программа профессионального обучения</span></p>
        <p><strong>Объем, ч:</strong> 20</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span itemprop="eduForm">очно-заочная (смешанная): теория — через
            СДО, практические занятия — очно на учебной площадке (ул. Дачная, 18)</span></p>
        <p><strong>Документ по окончании:</strong> свидетельство о профессии рабочего, должности
            служащего</p>
        <p><strong>Преподаватель:</strong> Соснин Д.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П31_ПК_ПБ_Б.9.3_Подъемные_сооружения.pdf')}}"
            target="_blank"
            itemprop="opMain"
        ><i class="fas fa-download"></i> Скачать программу обучения</a>
    </div>

    {{-- ПРОГРАММА 33 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 33</h5>
        <h4 class="mb-3" itemprop="eduProf">«Монтажник технологических трубопроводов»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">основная программа профессионального обучения
            (переподготовка рабочих)</span></p>
        <p><strong>Объем, ч:</strong> 80</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span itemprop="eduForm">очно-заочная (смешанная): теория — через
            СДО, практические занятия — очно на учебной площадке (ул. Дачная, 18)</span></p>
        <p><strong>Документ по окончании:</strong> свидетельство о профессии рабочего, должности
            служащего</p>
        <p><strong>Преподаватель:</strong> Соснин Д.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П33_ПО_Монтажник_технологических_трубопроводов.pdf')}}"
            target="_blank"
            itemprop="opMain"
        >
            <i class="fas fa-download"></i> Скачать программу обучения
        </a>
    </div>

    {{-- ПРОГРАММА 34 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 34</h5>
        <h4 class="mb-3" itemprop="eduProf">
            «Повышение квалификации для руководителей организаций, лиц, назначенных руководителем организации
            ответственными за обеспечение пожарной безопасности, в том числе в обособленных структурных подразделениях
            организации»
        </h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
                квалификации</span>
        </p>
        <p><strong>Объем, ч:</strong> 40</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p>
            <strong>Документ по окончании:</strong> удостоверение о повышении квалификации
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И., Колесников Н.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П34_ПК_Ответственные_за_обеспечение_пожарной_безопасности.pdf')}}"
            target="_blank"
            itemprop="opMain"
        >
            <i class="fas fa-download"></i> Скачать программу обучения
        </a>
    </div>

    {{-- ПРОГРАММА 35 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 35</h5>
        <h4 class="mb-3" itemprop="eduProf">
            «Электроустановки. Правила безопасной работы. II группа (до 1000В) по электробезопасности
            электротехнического, электротехнологического персонала»
        </h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
                квалификации</span>
        </p>
        <p><strong>Объем, ч:</strong> 72</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p>
            <strong>Документ по окончании:</strong> удостоверение о повышении квалификации
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П35_ПК_Электроустановки_II_группа_до_1000_В.pdf')}}"
            target="_blank"
            itemprop="opMain"
        >
            <i class="fas fa-download"></i> Скачать программу обучения
        </a>
    </div>

    {{-- ПРОГРАММА 36 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 36</h5>
        <h4 class="mb-3" itemprop="eduProf">«Эксплуатация химически опасных производственных объектов (Б.1.1)»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа повышения
                квалификации</span>
        </p>
        <p><strong>Объем, ч:</strong> 72</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p>
            <strong>Документ по окончании:</strong> удостоверение о повышении квалификации
        </p>
        <p><strong>Преподаватель:</strong> Азанов В.С.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П36_ПК_ПБ_Б.1.1_Химически_опасные_производственные_объекты.pdf')}}"
            target="_blank"
            itemprop="opMain"
        >
            <i class="fas fa-download"></i> Скачать программу обучения
        </a>
    </div>

    {{-- ПРОГРАММА 37 --}}
    <hr class="my-5">
    <div itemprop="eduOp">
        <h5 class="mb-4">Программа 37</h5>
        <h4 class="mb-3" itemprop="eduProf">«Специалист по пожарной профилактике»</h4>
        <p><strong>Вид программы:</strong> <span itemprop="eduLevel">дополнительная профессиональная программа
                профессиональной переподготовки</span>
        </p>
        <p><strong>Объем, ч:</strong> 256</p>
        <p><strong>Форма обучения, ЭО и ДОТ:</strong> <span
                itemprop="eduForm">заочная, с применением ЭО и ДОТ через СДО</span></p>
        <p>
            <strong>Документ по окончании:</strong> диплом о профессиональной переподготовке
        </p>
        <p><strong>Преподаватель:</strong> Федоров А.И., Колесников Н.А.</p>
        <a
            class="btn btn-brand mt-3"
            href="{{asset('documents/edu_programs/П37_ПП_Специалист_по_пожарной_профилактике.pdf')}}"
            target="_blank"
            itemprop="opMain"
        >
            <i class="fas fa-download"></i> Скачать программу обучения
        </a>
    </div>

    <p class="mt-5">
        <i>
            Дистанционно не проводятся практические занятия по оказанию первой помощи, по применению СИЗ и на тренажерах
            (п. 66 Правил обучения по охране труда в ред. постановления Правительства РФ от 30.06.2026 № 805), поэтому
            эти программы — в смешанной форме.
        </i>
    </p>

    <p>
        <i>
            По каждой программе на сайте размещаются (электронные документы, подписанные простой электронной подписью):
            образовательная программа, учебный план, календарный учебный график, рабочие программы (аннотации),
            оценочные и методические материалы. Программы № 1–33 (папка «Программы», файлы П01–П33) рассмотрены
            Педагогическим советом (протокол от 23.10.2026 №1) и утверждены приказом от 23.10.2026 № 9 (файл 18) —
            разместить по каждой программе.
        </i>
    </p>

    <p itemprop="eduChislenEl">
        <strong>Численность обучающихся</strong>
        по договорам с физическими и юридическими лицами (электронный документ); численность иностранных граждан. Все
        обучающиеся обучаются по договорам с юридическими лицами (за счет бюджетов и по договорам с физическими лицами —
        0).
    </p>

    <p>
        <strong>
            <a href="#" itemprop="eduChislenEl">
                <i class="fas fa-download"></i> Сведения о численности обучающихся по каждой программе (за период с
                01.01.2026 по 19.10.2026)
            </a>
        </strong>
    </p>

    <p>
        <strong>Язык образования:</strong> русский —
        <a
            href="{{asset('downloads/sveden/15_Справка_о_языке_образования.pdf')}}"
            title="Скачать"
            target="_blank"
            itemprop="languageEl"
        >справка</a>.
    </p>

    <p>Научная деятельность: не осуществляется.</p>
@endsection
