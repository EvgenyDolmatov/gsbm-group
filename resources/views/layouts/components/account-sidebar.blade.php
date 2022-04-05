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

    <!-- Учебный центр -->
    @can('manage course')
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingEducation">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEducation" aria-expanded="false"
                        aria-controls="flush-collapseEducation">
                    Учебный центр
                </button>
            </h2>
            <div id="flush-collapseEducation" class="accordion-collapse collapse"
                 aria-labelledby="flush-headingEducation" data-bs-parent="#accordionEducation">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li>
                            <a href="{{route('courses.index')}}">Курсы</a>
                        </li>
                        <li>
                            <a href="{{route('study-groups.index')}}">Группы</a>
                        </li>
                        <li>
                            <a href="#">Студенты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endcan

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

    {{-- My Courses --}}
    @role('user')
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
    @endrole
</div>
