@extends('layouts/blankLayout')

@section('title', 'Home')

@section('content')
    <div class="page-content">
        {{-- Блок 1 начало --}}
        <div class="d-flex flex-lg-row flex-md-row flex-xs-column justify-content-end h-75">
            <div class="heading-block col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex align-items-center">
                <div>
                    <div class="col-lg-12">
                        <h1>Платформа <br />для обучения</h1>
                    </div>
                    <div class="d-flex">
                        <div class="col-lg-3 col-sm-4">
                            <div class="d-flex flex-row  avatars ">
                                <div class="avatar1">
                                    <img src="{{ asset('assets/img/avatars/avatar1.png') }}" height="65rem"
                                        alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                                <div class="avatar2">
                                    <img src="{{ asset('assets/img/avatars/avatar2.png') }}" height="65rem"
                                        alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                                <div class="avatar3">
                                    <img src="{{ asset('assets/img/avatars/avatar3.png') }}" height="65rem"
                                        alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-8">
                            <h1>Навыкам</h1>
                        </div>
                    </div>
                    <hr class="hr hr-blurry" />
                    <div class="d-flex">
                        <div class="col-lg-6 mr-5">
                            <button type="button" class="btn btn-butterfly">
                                Поехали<i class='bx bx-sm bx-play-circle'></i>
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <h4>Лучшие курсы пользовательского<br />опыта</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-end">
                <div id="bncourse" class="col-lg-3 inner-banner banner-course">
                    <div class="ban-course-text">
                        <h4 class="pad18"><strong class="bold">8</strong><br />Курсов</h4>
                        <img src="{{ asset('assets/img/elements/divider.svg') }}" alt="divider" />
                    </div>
                </div>
                <div class="col-lg-3 banner-coach d-flex inner-banner d-flex">
                    <div class="ban-coach-text">
                        <h4><strong class="bold">JANE</strong><br />Hairstylist, Google</h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- Блок 1 конец --}}

        {{-- Блок 2 начало --}}
        <div class="d-flex flex-lg-row flex-md-column flex-xs-column mt-5 gap-3">
            {{-- Первая колонна --}}
            <div class="col-lg-3 col-md-12 d-flex flex-lg-column flex-md-row flex-xs-column gap-3">
                <div class="col-lg-12 col-md-6 col-xs-12 course-card d-flex justify-content-center align-items-center">
                    <div class="main-pg-course eyelash-banner d-flex flex-column justify-content-between">
                        <div>
                            <img class="pb-2" src="{{ asset('assets/img/icons/brands/asana.png') }}" height="40"
                                alt="divider" />
                            <p>eyelash extension</p>
                            <p>UXD, CEO</p>
                        </div>
                        <button type="button" class="btn btn-white"><i class='bx bxs-microphone'></i>
                            Поехали
                        </button>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-xs-12 course-card d-flex justify-content-center align-items-center">
                    <div class="main-pg-course makeup-banner p-5 d-flex flex-column justify-content-between">
                        <div>
                            <img src="{{ asset('assets/img/icons/brands/asana.png') }}" height="40" alt="divider" />
                            <p>eyelash extension</p>
                            <p>UXD, CEO</p>
                        </div>
                        <button type="button" class="btn btn-white">
                            <i class='bx bxs-microphone'></i>
                            Поехали
                        </button>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 d-flex justify-content-center sale-block">
                    <div class="sale-text "><a href="#">ЗАПИСЫВАЙСЯ </a>СЕЙЧАС И ПОЛУЧИ СКИДКУ </div>
                    <div class="sale-sum">15%</div>
                </div>
            </div>
            {{-- Вторая колонна --}}
            <div class="col-lg-6 col-md-12 col-xs-12 d-flex flex-column gap-3">
                <div class="career-card  d-flex justify-content-center align-items-center">
                    <div class="career-inner d-flex flex-column justify-content-center align-items-center">
                        <p>Преподаватели</p>
                        <h4>начать новую карьеру<br>с профессионалами</h3>
                            <div class="col-lg-2 col-sm-6 flex-row avatars" id="avatars">
                                <div class="coach-avatar1">
                                    <img src="{{ asset('assets/img/avatars/avatar1.png') }}" height="36.85"
                                        alt="View Badge User" />
                                </div>
                                <div class="coach-avatar2">
                                    <img src="{{ asset('assets/img/avatars/avatar2.png') }}" height="36.85"
                                        alt="View Badge User" />
                                </div>
                                <div class="coach-avatar3">
                                    <img src="{{ asset('assets/img/avatars/avatar3.png') }}" height="36.85"
                                        alt="View Badge User" />
                                </div>
                            </div>
                            <div id="coachInfo" class="row show">
                                <div class="col-4 c-avatar d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/avatars/avatar1.png') }}" alt="avatar" />
                                    <strong>Maria Johnson</strong>
                                    <p>Eyebrow and lip perm</p>
                                </div>
                                <div class="col-4 c-avatar d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/avatars/avatar1.png') }}" alt="avatar" />
                                    <strong>Maria Johnson</strong>
                                    <p>Eyebrow and lip perm</p>
                                </div>
                                <div class="col-4 c-avatar d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/avatars/avatar1.png') }}" alt="avatar" />
                                    <strong>Maria Johnson</strong>
                                    <p>Eyebrow and lip perm</p>
                                </div>
                            </div>
                            <button type="button" id="coach-btn"
                                class="btn coach-btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-md bx bx-plus"></span>
                            </button>
                    </div>
                </div>
                <div class="about-card d-flex flex-column gap-3">
                    <div class="d-flex justify-content-between gap-3">
                        <div data-content="content-about"
                            class="col-4 d-flex justify-content-center  align-items-center about active-about">
                            О нас
                        </div>
                        <div data-content="content-mission"
                            class="col-4 d-flex justify-content-center align-items-center about">
                            Миссия
                        </div>
                        <div data-content="content-cert"
                            class="col-4 d-flex justify-content-center align-items-center about">
                            Сертификат
                        </div>
                    </div>
                    <div class="about-inner content-about">
                        <h5>О нас</h5>
                        <p>Добро пожаловать на нашу инновационную платформу по бьюти курсам! Мы рады представить вам
                            уникальную возможность погрузиться в мир красоты, ухода за кожей и макияжа через наши
                            увлекательные курсы. Независимо от вашего уровня подготовки или опыта, наша платформа предлагает
                            разнообразные курсы, которые помогут вам стать настоящим экспертом в области бьюти.

                            Что делает нашу платформу особенной? Во-первых, мы сотрудничаем с лучшими инструкторами и
                            профессионалами бьюти-индустрии. Наши курсы разработаны так, чтобы предоставить вам не только
                            теоретические знания, но и практические навыки, которые можно сразу применить. Все материалы
                            структурированы и легко усваиваемы, чтобы обеспечить наилучший опыт обучения.

                            Наша платформа также предлагает гибкий график обучения. Вы можете выбрать подходящее время и
                            темп для прохождения курсов в соответствии с вашими обстоятельствами. Вам не нужно менять свои
                            планы - обучение подстраивается под вас.
                        </p>
                    </div>
                    <div class="about-inner d-none content-mission">
                        <h5>Наша Миссия</h5>
                        <p>Наша миссия - вдохновлять и обучать людей на всех уровнях интереса к красоте, помогая им раскрыть свой потенциал в этой захватывающей области. Мы стремимся создать среду, где каждый может найти что-то ценное и полезное для себя, независимо от их целей и опыта.

                          Мы верим в силу образования и уверены, что знания - ключ к успешной и уверенной жизни. Нашей целью является обеспечение доступа к качественным бьюти курсам, которые не только учат конкретным навыкам, но и позволяют нашим студентам раскрыть свою творческую и профессиональную сущность.
                          
                          Через наши курсы мы стремимся дать людям возможность самовыражения и саморазвития в сфере красоты. Мы поддерживаем и поощряем разнообразие стилей, культур и индивидуальных предпочтений, помогая каждому найти свой собственный путь к красоте.
                          
                          Мы также активно следим за последними тенденциями и инновациями в индустрии красоты, чтобы обеспечивать актуальное и актуальное образование. Наша цель - подготовить специалистов, которые не только отлично владеют техниками, но и способны адаптироваться к постоянно меняющейся природе красоты.
                          
                          С нашей миссией мы стремимся вдохновить наших студентов пройти путь от учеников до экспертов, создавая красоту и уверенность в себе, как внутри, так и снаружи.
                        </p>
                    </div>
                    <div class="about-inner d-none content-cert">
                        <h5>Сертификат</h5>
                        <p>Мы гордимся тем, что наша платформа фокусируется на практических навыках и личном развитии, а не только на получении сертификатов. Мы верим, что истинная ценность заключается в знаниях и опыте, которые вы получите во время обучения, и в уверенности, которую вы сможете применить на практике.

                          Хотя мы не предоставляем официальных сертификатов по окончанию курсов, мы гарантируем, что каждый наш студент будет иметь доступ к обширным материалам, практическим упражнениям и поддержке, которые помогут им наращивать навыки и уверенность в выбранной области.
                          
                          Наше сообщество ориентировано на обмен опытом, обучение друг друга и поддержку в процессе развития. Мы призываем наших студентов использовать знания, полученные в ходе курсов, чтобы развивать свои навыки и строить успешную карьеру в сфере красоты.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Третья колонна --}}
            <div class="col-lg-3 col-md-12 col-xs-12 third-column">
                <div class="col-lg-12 col-md-6 col-xs-12 list-card ">
                    <h6>Курсы</h6>
                    <div class="d-flex flex-column justify-content-around gap-3">
                        <div class="col-12 d-flex justify-content-start">
                            <button class="outline-btn">Наращивание ногтей</button>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="outline-btn">Наращивание ресниц</button>
                        </div>
                        <div class="col-12">
                            <button class="outline-btn">Пергаментный макияж</button>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button class="outline-btn">Шугаринг</button>
                            </div>
                            <div class="col-6">
                                <button class="outline-btn">Тату</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="outline-btn d-flex justify-content-center">
                                КУРСЫ КОСМЕТОЛОГА
                            </button>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-6">
                                <button class="outline-btn">МАССАЖ</button>
                            </div>
                            <div class="col-6">
                                <button class="outline-btn">БРОВИСТ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-xs-12 reviews-card">
                    <h6>Отзывы</h6>
                    <div class="review-inner d-flex justify-content-center">
                        <div class="review-text">
                            Always wanted to spend less
                            time for makeup in the morning.
                            I decided to learn permanent from Julia, very
                            satisfied with the result!
                            <div class="review-avatar d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/avatars/avatar1.png') }}" alt="avatar" />
                                <strong>Maria Johnson</strong>
                                <p>Eyebrow and lip perm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Блок 2 конец --}}
        </div>

    </div>

@endsection
