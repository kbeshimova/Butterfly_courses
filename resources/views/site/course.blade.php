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
        <div class="about-course row px-9 pt-7  py-6">
            <div class="col-7">
                <h2>Eyelash extension courses</h2>
                <p>
                    Learn the secrets of professional excellence and unleash your potential in the world of beauty with our
                    exclusive training programs!
                    Learn the secrets of professional excellence and unleash your potential in the world of beauty with our
                    exclusive training programs!
                    Learn the secrets of professional excellence and unleash your potential in the world of beauty with our
                    exclusive training programs!
                </p>
            </div>
            <div class="col-1"></div>
            <div class="col-4 d-flex justify-content-center">
                <div class="one-course">
                    <img src="{{ asset('assets/img/banners/one-course1.svg') }}" height="180rem" width="180rem"
                        {{-- width: 19.4375rem; --}} alt="View Badge User"
                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                </div>
            </div>
        </div>

        <div class="stages-block row py-6 px-9 ">
            <h3 class="d-flex py-5 justify-content-center align-items-center">Stages of learning in the <span
                    class="highlighted"> course</span></h3>
            <div class="col-lg-1 col-md-1 col-xs-12 stages-no">01</div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <h3>What does the course include?</h3>
                <p>Learn the secrets of professional excellence and unleash your potential in the world of beauty with our
                    exclusive training programs!</p>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-12 stages-no">02</div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <h3>What does the course include?</h3>
                <p>Learn the secrets of professional excellence and unleash your potential in the world of beauty with our
                    exclusive training programs!</p>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-12 stages-no">03</div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <h3>What does the <span class="highlighted">course</span> include?</h3>
                <p>Learn the secrets of professional excellence and unleash your potential in the world of beauty with our
                    exclusive training programs!</p>
            </div>
        </div>

        <div class="row  py-6 px-9">
            <div class="col-lg-6 col-md-6 col-xs-12 order-2 corse-content mb-4 mb-md-0">
                <h6 class="d-flex justify-content-center pt-4">Course content</h6>
                <div class="accordion mt-3" id="accordionExample">
                    <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingOne">
                            <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                Accordion Item 1
                            </button>
                        </h2>

                        <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps
                                icing marzipan gummi
                                bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer
                                gummi bears
                                marshmallow pastry pie.
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                Accordion Item 2
                            </button>
                        </h2>
                        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat
                                cake dragée ice
                                cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans
                                candy canes
                                carrot cake. Fruitcake chocolate chupa chups.
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                Accordion Item 3
                            </button>
                        </h2>
                        <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                                gingerbread
                                marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée
                                caramels. Ice cream
                                wafer danish cookie caramels muffin.
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                Accordion Item 4
                            </button>
                        </h2>
                        <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                                gingerbread
                                marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée
                                caramels. Ice cream
                                wafer danish cookie caramels muffin.
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFour">
                                Accordion Item 5
                            </button>
                        </h2>
                        <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                                gingerbread
                                marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée
                                caramels. Ice cream
                                wafer danish cookie caramels muffin.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-xs-12 order-1 d-flex flex-column justify-content-center px-9 ">
                <h3 id="textAboveRange"><span class="highlighted">02.</span> For Advanced</h3>
                <div class="range">
                    <div class="sliderValue">
                        <span id="sliderValue">1</span>
                    </div>
                    <div class="field">
                        <input type="range" name="sliders" id="sliders" min="1" max="3"
                            value="1" step="1" />
                    </div>
                    <div id="textUnderRange"><p>Главное в моей работе — чтобы вы ощущали
                        себя красивыми, неповторимыми и счастливыми</p></div>
                </div>
            </div>

            <div class="course-buy order-3  row d-flex justify-content-center px-9 py-6">
                <div class="one-course-card py-4 px-4 mx-5">
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
                <div class="one-course-card py-4 px-4 mx-5">
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

            <div class="portfolio order-4 row py-6 px-9">
                <h2>Портфолио мастера</h2>
                <p>
                    Главное в моей работе — чтобы вы ощущали
                    себя красивыми, неповторимыми и счастливыми
                </p>
                <div class="owl-carousel">
                    <div class="item"><img
                            src="{{ asset('assets/img/banners/one-course1.svg') }}"alt="View Badge User"></div>
                    <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}"
                            alt="View Badge User"></div>
                    <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}"
                            alt="View Badge User"></div>
                    <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}"
                            alt="View Badge User"></div>
                    <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}"
                            alt="View Badge User"></div>
                    <div class="item"><img src="{{ asset('assets/img/banners/one-course1.svg') }}"
                            alt="View Badge User"></div>
                </div>
            </div>
        </div>

    @endsection
