@extends('layouts/blankLayout')

@section('title', 'Home')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
@endsection

@section('content')
    <div class="page-content">
        <div class="heading about-course row">
            <div class="col-7">
                <h2>Мануальная практика для лица</h2>
                <p>
                    <strong>Чем просто массаж лица отличается, от мануальной практики.</strong><br><br>
                    Мануальное воздействие работает на более глубинном уровне с глубокими фасциями, надкостницей, мышцами.
                    Оно затрагивает не только лицо, но и все прилегающие мышцы. С помощью такой практики ослабевает
                    натяжение Фасции черепа, становится лучше отток и приток крови, улучшается движение ликвора.
                    Снимается напряжение с мышц шеи, затылочной, височной, лобной, темянной зон, тем самым ослабляя
                    натяжение, мы снимаем напряжение со всех прилегающих и взаимодествующих мышц.
                    Мы приводим в движение фасцию, делаем её более подвижной, что даёт подвижность и питание во всех
                    областях шейно лицевой зоны.
                    Мануальное практика помогает расширить кости черепа и ослабить натяжение Фасции, тем самым убирая
                    глубокие морщины.
                    Налаживая дыхательную, кровеносную и лимфосистемы мы добивается омолаживающего результата.
                    Курс подойдёт как для начинающих так и для профессионалов, кто хочет повысить уровень своего
                    профессионализма и овладеть крутыми и быстрыми техниками Антиэйдж

                </p>
            </div>
            <div class="col-1"></div>
            <div class="col-4 d-flex justify-content-center">
                <div class="one-course">
                    <img src="{{ asset('assets/img/masters/master-photo-1.jpg') }}" height="300rem" width="300rem"
                        {{-- width: 19.4375rem; --}} alt="View Badge User"
                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                </div>
            </div>
        </div>

        <div class="stages-block row py-6 ">
            <h2 class="d-flex py-5 justify-content-center align-items-center">Этапы обучения<span class="highlighted pl-1">на
                    курсе</span></h2>
            <div class="col-lg-1 col-md-1 col-xs-12 stages-no">01</div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <h3> Определение Основ</h3>
                <p>В этой фазе вы освоите неотъемлемые теоретические основы бьюти индустрии. Получите углубленное понимание
                    ухода за кожей, макияжа и более тонких аспектов красоты.</p>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-12 stages-no">02</div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <h3>Навыки на Практике</h3>
                <p>Здесь вы переведете теорию в реальную деятельность. Под наблюдением опытных профессионалов, вы будете
                    тренироваться, улучшать свои навыки и осваивать искусство красоты путем практических упражнений.</p>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-12 stages-no">03</div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <h3>Проверка Уровня</h3>
                <p>Покажите, на что вы способны. С практическими заданиями и тестами вы продемонстрируете ваш прогресс в
                    создании образов и уходе за красотой, подтвердив вашу готовность к следующему этапу.
                </p>
            </div>
        </div>

        <div class="row  py-6 px-9">
            <div class="col-lg-6 col-md-12 col-xs-12 order-2 corse-content mb-4 mb-md-0">
                <h6 class="d-flex justify-content-center pt-4">Course content</h6>
                <div class="accordion mt-3" id="accordionExample">
                    <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingOne">
                            <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                Урок 1
                            </button>
                        </h2>

                        <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li> 1. Что такое лимфосистема</li>
                                    <li> 2. Кровеносная система</li>
                                    <li>3. Нервная система</li>
                                    <li>4. Дыхательная система</li>
                                    <ul>

                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                Урок 2
                            </button>
                        </h2>
                        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li> 1. Скелетное Строение и взаимодействие структур </li>
                                    <li> 2. Анатомия костей черепа </li>
                                    <ul>
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                Урок 3
                            </button>
                        </h2>
                        <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li> 1. Структура мышцы </li>
                                    <li> 2. Анатомия мышц лица </li>
                                    <li>3. Что такое Фасции и их влияние на тело</li>
                                    <li>4. Строение Фасции по черепу</li>
                                    <ul>
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                Урок 4
                            </button>
                        </h2>
                        <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li> 1. Гигиена места, противопоказания</li>
                                    <li> 2. Положение тела массажиста </li>
                                    <li>3. Способы воздействия на тело</li>
                                    <li>4. Практика воздействия и ощущения</li>
                                    <ul>
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFour">
                                Урок 5
                            </button>
                        </h2>
                        <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li> 1. Проработка грудной зоны – задняя, передняя</li>
                                    <li> 2. Работаем с костями черепа, фасциями, затылочной зоной /li>
                                    <li>3. Проработка костей черепа - лицевая часть </li>
                                    <li>4. Разбор нижнечелюстного сустава, коррекция прикуса.</li>
                                    <li>5. Проработка шейных мышц и платизмы. </li>
                                    <ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12 order-1 d-flex flex-column justify-content-center px-9 ">
                <h3 id="textAboveRange"><span class="highlighted">02.</span> For Advanced</h3>
                <div class="range">
                    <div class="sliderValue">
                        <span id="sliderValue">1</span>
                    </div>
                    <div class="field">
                        <input type="range" name="sliders" id="sliders" min="1" max="3"
                            value="1" step="1" />
                    </div>
                    <div id="textUnderRange">
                        <p>Главное в моей работе — чтобы вы ощущали
                            себя красивыми, неповторимыми и счастливыми</p>
                    </div>
                </div>
            </div>

            <div class="course-buy order-3 py-6 gap-4">
                <div class="one-course-card">
                    {{-- py-4 px-4 mx-5 --}}
                    <h3>Course brow artist</h3>
                    <div class="row d-flex flex-row py-3">
                        <div class="col-6 d-flex justify-content-end highlighted price">775 rub</div>
                        <div class="col-6 d-flex justify-content-start sale">1550 rub</div>
                    </div>
                    <p class="pre">Participation in an online course</p>
                    <ul>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                    </ul>
                    <p class="pre pt-4"> Access to the course will automatically come to your email after payment</p>
                    <div class="col-12 d-flex justify-content-center"><button type="button" class="btn btn-pink">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="one-course-card">
                    {{-- py-4 px-4 mx-5 --}}
                    <h3>Course brow artist</h3>
                    <div class="row d-flex flex-row py-3">
                        <div class="col-6 d-flex justify-content-end highlighted price">775 rub</div>
                        <div class="col-6 d-flex justify-content-start sale">1550 rub</div>
                    </div>
                    <p class="pre">Participation in an online course</p>
                    <ul>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                        <li>Access to the course for 12 months</li>
                    </ul>
                    <p class="pre pt-4"> Access to the course will automatically come to your email after payment</p>
                    <div class="col-12 d-flex justify-content-center"><button type="button" class="btn btn-pink">
                            Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio order-4 row py-6 px-9">
            <h2>Портфолио мастера</h2>
            <p>
                Главное в моей работе — чтобы вы ощущали
                себя красивыми, неповторимыми и счастливыми
            </p>
            <div class="owl-carousel">
                <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}"alt="View Badge User">
                </div>
                <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}" alt="View Badge User">
                </div>
                <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}" alt="View Badge User">
                </div>
                <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}" alt="View Badge User">
                </div>
                <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}" alt="View Badge User">
                </div>
                <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}" alt="View Badge User">
                </div>
            </div>
        </div>


    @endsection
