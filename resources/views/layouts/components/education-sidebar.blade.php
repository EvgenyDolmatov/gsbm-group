<div class="accordion accordion-flush" id="accordionServices">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingAbout">
            <button class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseAbout"
                    aria-expanded="false"
                    aria-controls="flush-collapseAbout"
            >Сведения об образовательной организации</button>
        </h2>
        <div id="flush-collapseAbout" class="accordion-collapse collapse"
             aria-labelledby="flush-headingAbout" data-bs-parent="#accordionAbout">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.sveden.common')}}">
                            Основные сведения
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.struct')}}">
                            Структура и органы управления образовательной организацией
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.document')}}">
                            Документы
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.education')}}">
                            Образование
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.eduStandards')}}">
                            Образовательные стандарты и требования
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.managers')}}">
                            Руководство
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.employees')}}">
                            Педагогический состав
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.objects')}}">
                            Материально-техническое обеспечение и оснащенность образовательного процесса.
                            Доступная среда
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.paidEdu')}}">
                            Платные образовательные услуги
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.budget')}}">
                            Финансово-хозяйственная деятельность
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.vacant')}}">
                            Вакантные места для приема (перевода) обучающихся
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.grants')}}">
                            Стипендии и меры поддержки обучающихся
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.inter')}}">
                            Международное сотрудничество
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.sveden.catering')}}">
                            Организация питания в образовательной организации
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Направления обучения -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingStudyDirections">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseStudyDirections" aria-expanded="false"
                    aria-controls="flush-collapseStudyDirections">
                Платные услуги
            </button>
        </h2>
        <div id="flush-collapseStudyDirections" class="accordion-collapse collapse"
             aria-labelledby="flush-headingStudyDirections" data-bs-parent="#accordionStudyDirections">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.outsourcing.price')}}">Услуги аутсорсинга в области охраны труда</a>
                    </li>
                    <li>
                        <a href="{{route('education.price')}}">Обучение по охране труда и смежным направлениям</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Формы обучения -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingStudyForms">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseStudyForms" aria-expanded="false"
                    aria-controls="flush-collapseStudyForms">
                Формы обучения
            </button>
        </h2>
        <div id="flush-collapseStudyForms" class="accordion-collapse collapse"
             aria-labelledby="flush-headingStudyForms" data-bs-parent="#accordionStudyForms">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.forms.full-time')}}">Очно (в Учебном центре)</a>
                    </li>
                    <li>
                        <a href="{{route('education.forms.distance')}}">Дистанционно (без отрыва от производства)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Документы -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingDocuments">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseDocuments" aria-expanded="false"
                    aria-controls="flush-collapseDocuments">
                Документы
            </button>
        </h2>
        <div id="flush-collapseDocuments" class="accordion-collapse collapse"
             aria-labelledby="flush-headingDocuments" data-bs-parent="#accordionDocuments">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.docs.permits')}}">Разрешительные документы</a>
                    </li>
                    <li>
                        <a href="{{route('education.docs.local')}}">Локально-нормативные документы</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Контакты -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingContacts">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseContacts" aria-expanded="false"
                    aria-controls="flush-collapseContacts">
                Об учебном центре
            </button>
        </h2>
        <div id="flush-collapseContacts" class="accordion-collapse collapse"
             aria-labelledby="flush-headingContacts" data-bs-parent="#accordionContacts">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.about.reviews')}}">Отзывы</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
