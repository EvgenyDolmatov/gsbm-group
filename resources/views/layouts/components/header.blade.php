<div class="header-top">
    <div class="container-xl container-fluid">
        <div class="d-flex justify-content-end">
            <ul class="d-flex justify-content-end">
                @auth()
                    <li><a href="{{route('account')}}">Аккаунт</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}"
                               onclick="event.preventDefault();this.closest('form').submit();">
                                Выйти
                            </a>
                        </form>
                    </li>
                @else
                    <li><a href="{{route('login')}}">Вход в аккаунт</a></li>
                    <li><a href="{{route('register')}}">Регистрация</a></li>
                @endauth
            </ul>
        </div>
    </div>
</div>
<header class="header">
    <div class="container-xl container-fluid">
        <div class="row d-flex justify-content-end">
            <div class="col-xl-2 col-2">
                @yield('logo')
            </div>
            <div class="col-xl-10 col-10">
                <div class="header-right">
                    <div class="header-contacts">
                        <div class="phone">
                            <a href="tel:+73422055003">+7&nbsp;(342)&nbsp;205-50-03</a>
                        </div>
                        <div class="email">
                            <a href="mailto:info@gsbm-group.ru">info@gsbm-group.ru</a>
                        </div>
                    </div>

                    <nav class="navbar navbar-expand navbar-light">

                        <div class="navbar-burger open">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('app.about-page')}}">О нас</a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a class="nav-link" href="#">Виды работ</a>
                                    <ul class="nav-dropdown-list">
                                        @foreach($services as $service)
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   href="{{route('services.show-public', $service->slug)}}">
                                                    {{$service->title}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('app.licensees-page')}}">Свидетельства</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Учебный центр</a>
                                    <ul class="nav-dropdown-list">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('education.info.main')}}">Сведенья об
                                                образовательной организации</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('education.outsourcing.price')}}">Платные
                                                услуги</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('education.forms.full-time')}}">Дистанционное
                                                обучение</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('education.docs.permits')}}">Документы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('education.about.contacts')}}">Об учебном
                                                центре</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('app.contacts-page')}}">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-menu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('app.about-page')}}">О нас</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link parent-link" href="#">Виды работ</a>
                <ul class="nav-dropdown-list">
                    @foreach($services as $service)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('services.show-public', $service->slug)}}">
                                {{$service->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('app.licensees-page')}}">Свидетельства</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link parent-link" href="#">Учебный центр</a>
                <ul class="nav-dropdown-list">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('education.info.main')}}">Сведенья об образовательной
                            организации</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Направления обучения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('education.forms.full-time')}}">Формы обучения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('education.docs.permits')}}">Документы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('education.about.contacts')}}">Об учебном центре</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('app.contacts-page')}}">Контакты</a>
            </li>

        </ul>

        <a href="{{route('app.about-page')}}" class="btn btn-brand">Связаться с нами</a>

        <div class="mob-contacts">
            <a href="tel:+73422055003">+7&nbsp;(342)&nbsp;205-50-03</a>
            <a href="mailto:info@gsbm-group.ru" class="email">info@gsbm-group.ru</a>
        </div>
    </div>
</header>
