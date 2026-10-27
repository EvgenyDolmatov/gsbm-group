<div class="accordion accordion-flush" id="accordionServices">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingStudyForms">
            <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseStudyForms"
                aria-expanded="false"
                aria-controls="flush-collapseStudyForms"
            >Формы обучения</button>
        </h2>
        <div
            id="flush-collapseStudyForms"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingStudyForms"
            data-bs-parent="#accordionStudyForms"
        >
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.forms.full-time')}}">
                            Очно (в Учебном центре)
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.forms.distance')}}">
                            Дистанционно (без отрыва от производства)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
