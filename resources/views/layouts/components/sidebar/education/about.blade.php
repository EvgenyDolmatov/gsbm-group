<div class="accordion accordion-flush" id="accordionServices">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingContacts">
            <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseContacts"
                aria-expanded="false"
                aria-controls="flush-collapseContacts"
            >Об учебном центре</button>
        </h2>

        <div
            id="flush-collapseContacts"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingContacts"
            data-bs-parent="#accordionContacts"
        >
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.about.contacts')}}">
                            Контакты
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.about.reviews')}}">
                            Отзывы
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
