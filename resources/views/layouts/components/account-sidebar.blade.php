<div class="accordion accordion-flush" id="accordionServices">
    <!-- Account -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                Аккаунт
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse"
             aria-labelledby="flush-headingOne" data-bs-parent="#accordionServices">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('account')}}">Аккаунт</a>
                    </li>
                    <li>
                        <a href="{{route('account.edit')}}">Личные данные</a>
                    </li>
                    <li>
                        <a href="{{route('account.password')}}">Изменить пароль</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Услуги --}}
    @can('manage service')
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingServices">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseServices" aria-expanded="false"
                        aria-controls="flush-collapseServices">
                    Услуги
                </button>
            </h2>
            <div id="flush-collapseServices" class="accordion-collapse collapse"
                 aria-labelledby="flush-headingServices" data-bs-parent="#accordionServices">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li>
                            <a href="{{route('services.index')}}">Все услуги</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endcan

    {{-- Courses --}}
    @can('manage course')
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingCourses">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseCourses" aria-expanded="false"
                        aria-controls="flush-collapseCourses">
                    Курсы
                </button>
            </h2>
            <div id="flush-collapseCourses" class="accordion-collapse collapse"
                 aria-labelledby="flush-headingCourses" data-bs-parent="#accordionCourses">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li>
                            <a href="{{route('courses.index')}}">Курсы</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endcan

    {{-- My Courses --}}
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingMyCourses">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseMyCourses" aria-expanded="false"
                    aria-controls="flush-collapseMyCourses">
                Мои курсы
            </button>
        </h2>
        <div id="flush-collapseMyCourses" class="accordion-collapse collapse"
             aria-labelledby="flush-headingMyCourses" data-bs-parent="#accordionMyCourses">
            <div class="accordion-body">
                <ul class="accordion-list">
                    <li>
                        <a href="{{route('account.my-courses')}}">Все курсы</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
