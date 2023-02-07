<div class="accordion accordion-flush left-sidebar" id="accordionServices">
    <!-- Учебный центр -->
    @can('manage course')
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                    Статистика
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse"
                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionServices">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li>
                            <a href="{{route('crm.attestations.list')}}">Аттестация</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endcan

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                    aria-controls="flush-collapseTwo">
                Настройки
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse"
             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionServices">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{ route("crm.companies.list") }}">Компании</a>
                    </li>
                    <li>
                        <a href="{{ route("crm.professions.list") }}">Профессии</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
