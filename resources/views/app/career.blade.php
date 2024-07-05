@extends('layouts.guest')

@section('title', 'Карьера')
@section('keywords', 'Карьера')
@section('description', 'Карьера')

@section('content')
    <section id="career">
        <div class="header bg-white">
            <div class="container-xl container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1 class="page-header">Карьера</h1>
                    </div>
                    <div class="col-lg-7 col-12">
                        <h2 class="mb-4">Преимущества работы в&nbsp;ООО&nbsp;«Геострой&#8209;Буммаш»</h2>
                        <ul class="info-list-secondary">
                            <li>Конкурентная заработная плата</li>
                            <li>Работа в стабильной лидирующей компании</li>
                            <li>Дружелюбная обстановка в команде профессионалов</li>
                            <li>Динамичная работа</li>
                            <li>Обучение</li>
                            <li>Медосмотр</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-12 mb-5">
                        <div class="about-image">
                            <div class="overlay-image"></div>
                            <img src="{{asset('assets/app/img/career.jpg')}}"
                                 alt="Пароконденсатная головка">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="page-description">
                            <p>Работа у нас требует обучаемости и готовности к работе в коллективе. Кандидаты должны
                                быть готовы к получению необходимых навыков и знаний в рамках обучения на рабочем
                                месте.</p>
                            <p>Это готовность к работе в коллективе, готовность учиться и совершенствоваться, умение
                                слушать и следовать указаниям руководителей, умение решать конфликты и находить
                                компромиссы, ответственность за выполнение поставленных задач.</p>
                            <p>Сотрудники должны быть хорошо ознакомлены с правилами техники безопасности, соблюдать их
                                на практике и проверять исправность используемого оборудования перед началом работы.</p>

                            <h2 class="mt-5 mb-3">Организация труда в нашем коллективе</h2>
                            <p>Это деятельность, охватывающая в широком смысле организацию структуры и рабочих
                                процессов, взаимодействие работников друг с другом и производственными средствами.
                                Главная цель — выстроить последовательно трудовой процесс для достижения наилучших
                                результатов.</p>
                            <p>Организация структуры регулирует распределение заданий и взаимосвязей предприятия между
                                различными социально-техническими системами либо между организационными единицами
                                предприятия.</p>
                            <p>В последнее время возрастает значение формы организации труда, ориентированной на группы
                                (команды).</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="feedback-title pr-md-70">
                                <h2 class="mb-4">Прием резюме ООО&nbsp;«Геострой&#8209;Буммаш»</h2>

                                <div style="margin-bottom: 30px;">
                                    <p class="person-name mb-1">Ждахина Ксения Алексеевна</p>
                                    <a href="tel:+79026477092" class="person-link">
                                        +7 (902) 647-70-92
                                    </a>
                                    <a href="mailto:k.zhdahina@gsbm-group.ru" class="person-link person-link-email">
                                        k.zhdahina@gsbm-group.ru
                                    </a>
                                </div>

                                <div style="margin-bottom: 30px;">
                                    <p class="person-name mb-1">Соснин Денис Александрович</p>
                                    <a href="tel:+79519385356" class="person-link" style="margin-bottom: 30px;">
                                        +7 (951) 938-53-56
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="feedback-form pl-md-70">
                                <form action="{{route('email.feedback-resume')}}" method="post"
                                      enctype="multipart/form-data">
                                    <h2 class="mb-4">Форма отправки резюме:</h2>
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="form-label">Имя</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                        @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Телефон</label>
                                        <input type="text" id="phone" name="phone" class="form-control">
                                        @error('phone')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                        @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="resume" class="form-label">Прикрепите резюме</label>
                                        <input type="file" id="resume" name="resume" class="form-control">
                                        <small @error('name') class="text-danger" @enderror>
                                            прикрепите файл с расширением .doc, .docx или .pdf
                                        </small>
                                    </div>

                                    <small>
                                        <i>
                                            Отправляя резюме, я соглашаюсь с
                                            <a href="#">политикой конфиденциальности сайта.</a>
                                        </i>
                                    </small>
                                    <button type="submit" class="btn btn-brand mt-4">Отправить резюме</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('popups')
    @if(session()->has('success'))
        <div class="alert-wrap">
            <div class="alert alert-success">
                <span>{{session('success')}}</span>
                <span class="close">x</span>
            </div>
        </div>
    @endif

    @if($errors->any())
        <div class="alert-wrap">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <span>{{$error}}</span>
                    <span class="close">x</span>
                </div>
            @endforeach
        </div>
    @endif
@endsection
