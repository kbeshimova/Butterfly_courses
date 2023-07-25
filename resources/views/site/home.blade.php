@extends('layouts/blankLayout')

@section('title', 'Home')

@section('content')
<div class="page-content">
    {{-- Блок 1 начало --}}
  <div class="d-flex flex-lg-row flex-md-row flex-xs-column justify-content-end h-75 mb-5 mt-xs-5">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-5 d-flex align-items-center">
      <div>
        <div class="col-lg-12">
          <h1>Платформа <br />для обучения</h1>
        </div>
        <div class="d-flex">
          <div class="col-lg-3 col-sm-4">
            <div class="d-flex flex-row  avatars ">
              <div class="avatar1">
                <img
                  src="{{asset('assets/img/avatars/avatar1.png')}}"
                  height="65rem"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
              <div class="avatar2">
                <img
                  src="{{asset('assets/img/avatars/avatar2.png')}}"
                  height="65rem"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
              <div class="avatar3">
                <img
                  src="{{asset('assets/img/avatars/avatar3.png')}}"
                  height="65rem"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-sm-8">
            <h1>Навыкам</h1>
          </div>
        </div>
        <hr class="hr hr-blurry" />
        <div class="d-flex">
          <div class="col-lg-6">
            <button type="button" class="btn btn-butterfly">
              Поехали<span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp;
            </button>
          </div>
          <div class="col-lg-6 ml-xs-1">
            <h4>Лучшие курсы пользовательского<br />опыта</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-end">
      <div class="col-lg-3 inner-banner banner-course pt-5 mt-5 mx-4">
        <div class="ban-course-text">
          <h4 class="mx-4"><strong class="bold">8</strong><br />Курсов</h4>
          <img
            src="{{asset('assets/img/elements/divider.svg')}}"
            alt="divider"
          />
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
  <div class="d-flex flex-lg-row flex-md-column flex-xs-column mt-5">
    {{-- Первая колонна --}}
    <div class="col-lg-3 col-md-12 d-flex flex-lg-column flex-md-row flex-xs-column m-0">
      <div class="col-lg-12 col-md-6 col-xs-12 course-card d-flex justify-content-center align-items-center">
        <div class="main-pg-course eyelash-banner p-5 d-flex flex-column justify-content-between">
          <div>
          <img class="pb-2" src="{{asset('assets/img/icons/brands/asana.png')}}" height="40" alt="divider"/>
          <p>eyelash extension</p>
          <p>UXD, CEO</p>
          </div>
          <button type="button" class="btn btn-white">
            Поехали
          </button>
        </div>
      </div>
      <div class="col-lg-12 col-md-6 col-xs-12 course-card mt-lg-3 d-flex justify-content-center align-items-center mt-md-0">
        <div class="main-pg-course makeup-banner p-5 d-flex flex-column justify-content-between">
          <div>
          <img class="pb-2" src="{{asset('assets/img/icons/brands/asana.png')}}" height="40" alt="divider"/>
          <p>eyelash extension</p>
          <p>UXD, CEO</p>
          </div>
          <button type="button" class="btn btn-white">
            Поехали
          </button>
        </div> 
      </div>
      <div class="row col-lg-12 col-md-12 col-xs-12 py-5 px-5">
        <div class="col-10 sale-text p-0 m-0"><a href="#">ЗАПИСЫВАЙСЯ </a>СЕЙЧАС И ПОЛУЧИ СКИДКУ </div>
        <div class="col-2 sale-sum p-0 m-0">15%</div>
      </div>
    </div>
    {{-- Вторая колонна --}}
    <div class="col-lg-6 col-md-12 col-xs-12  mx-3">
      <div class="career-card  d-flex justify-content-center align-items-center mt-lg-0 mt-md-3">
        <div class="career-inner d-flex flex-column justify-content-center align-items-center" >
              <p>Преподаватели</p>
              <h4>начать новую карьеру<br>с профессионалами</h3> 
            <div class="col-lg-2 col-sm-6 flex-row avatars" id="avatars">
              <div class="coach-avatar1">
                <img src="{{asset('assets/img/avatars/avatar1.png')}}" height="36.85" alt="View Badge User"/>
              </div>
              <div class="coach-avatar2">
                <img src="{{asset('assets/img/avatars/avatar2.png')}}" height="36.85" alt="View Badge User"/>
              </div>
              <div class="coach-avatar3">
                <img src="{{asset('assets/img/avatars/avatar3.png')}}"  height="36.85" alt="View Badge User"/>
              </div>
            </div>
            <div id="coachInfo" class="row show" >
              <div class="col-4 c-avatar d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('assets/img/avatars/avatar1.png')}}" alt="avatar"/> 
                <strong>Maria Johnson</strong>
                <p>Eyebrow and lip perm</p>
              </div>
              <div class="col-4 c-avatar d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('assets/img/avatars/avatar1.png')}}" alt="avatar"/> 
                <strong>Maria Johnson</strong>
                <p>Eyebrow and lip perm</p>
              </div>
              <div class="col-4 c-avatar d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('assets/img/avatars/avatar1.png')}}" alt="avatar"/> 
                <strong>Maria Johnson</strong>
                <p>Eyebrow and lip perm</p>
              </div>
            </div>
              <button type="button" id="coach-btn" class="btn coach-btn rounded-pill btn-icon btn-outline-primary">
                <span class="tf-icons bx bx-md bx bx-plus"></span>
              </button>  
        </div>
      </div>
      <div class="about-card mt-3  p-5">
          <div class="row d-flex justify-content-between">
            <div data-content="content-about" class="col-lg-4 d-flex justify-content-center  align-items-center about active-about">
             О нас
            </div>
            <div data-content="content-mission" class="col-lg-4 d-flex justify-content-center align-items-center about">
              Миссия
            </div>
            <div data-content="content-cert" class="col-lg-4 d-flex justify-content-center align-items-center about mt-xs-1">
              Сертификат
            </div>
          </div>
          <div class="my-4 about-inner content-about">
            <h5>About Butterfly</h5>
            <p>The founders of the project were involved in each of the directions separately for 
            a long time and once decided to combine knowledge into experience in beauty and IT 
            in order to make the most convenient service for training and product selection, which
            will make life easier and create comfortable conditions for the development of each master
            and the beauty industry as a whole. 
            </p>
        </div>
          <div class="my-4 about-inner d-none content-mission">
            <h5>Mission Butterfly</h5>
            <p>The founders of the project were involved in each of the directions separately for 
            a long time and once decided to combine knowledge into experience in beauty and IT 
            in order to make the most convenient service for training and product selection, which
            will make life easier and create comfortable conditions for the development of each master
            and the beauty industry as a whole. 
            </p>
        </div>
          <div class="my-4 about-inner d-none content-cert">
            <h5>Certificate Butterfly</h5>
            <p>The founders of the project were involved in each of the directions separately for 
            a long time and once decided to combine knowledge into experience in beauty and IT 
            in order to make the most convenient service for training and product selection, which
            will make life easier and create comfortable conditions for the development of each master
            and the beauty industry as a whole. 
            </p>
        </div>
      </div>
    </div>
    {{-- Третья колонна --}}
    <div class="col-lg-3 col-md-12 col-xs-12 d-md-flex flex-lg-row flex-md-row flex-xs-column">
      <div class="col-lg-12 col-md-6 col-xs-12 list-card p-4 mt-lg-0 mt-md-3">
        <h6>Курсы</h6>
        <div class="d-flex flex-column justify-content-around h-100">
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
          <div class="row d-flex justify-content-between pb-4">
            <div class="col-6">
              <button class="outline-btn">МАССАЖ</button>
            </div>
            <div class="col-6">
              <button class="outline-btn">БРОВИСТ</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6 col-xs-12 reviews-card mt-3 p-4">
        <h6>Отзывы</h6>
        <div class="review-inner d-flex justify-content-center">
          <div class="review-text p-3">
            Always wanted to spend less
            time for makeup in the morning.
            I decided to learn permanent from Julia, very
            satisfied with the result!
            <div class="review-avatar d-flex flex-column justify-content-center align-items-center">
              <img src="{{asset('assets/img/avatars/avatar1.png')}}" alt="avatar"/> 
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