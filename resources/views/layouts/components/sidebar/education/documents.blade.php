<div class="accordion accordion-flush" id="accordionServices">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingDocuments">
            <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseDocuments"
                aria-expanded="false"
                aria-controls="flush-collapseDocuments"
            >Документы</button>
        </h2>
        <div id="flush-collapseDocuments"
             class="accordion-collapse collapse"
             aria-labelledby="flush-headingDocuments"
             data-bs-parent="#accordionDocuments"
        >
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('education.docs.permits')}}">
                            Разрешительные документы
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education.docs.local')}}">
                            Локально-нормативные документы
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
