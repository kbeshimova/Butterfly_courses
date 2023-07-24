@extends('layouts/blankLayout')

@section('title', 'Home')

@section('content')

@php
$courses = [
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/eyelash-course.svg', 'url' => '/course'],
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/makeup-course.svg', 'url' => '/course'],
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/eyebrow.svg', 'url' => '/course'],
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/nail.svg', 'url' => '/course'],
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/beauty.svg', 'url' => '/course'],
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/parchment.svg', 'url' => '/course'],
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/massage.svg', 'url' => '/course'],
    ['title' => 'Eyelash extension', 'subtitle' => 'UXD, CEO', 'img' => '/tattoo.svg', 'url' => '/course'],
];
@endphp

    <div class="page-content">
        <div class="col-6 col-md-12 col-xs-12 px-9 pt-7 py-6">
            <h2>Список курсов</h2>
            <p>
                Узнайте секреты профессионального мастерства и раскройте свой потенциал в мире красоты с нашими
                эксклюзивными
                обучающими программами!
            </p>
        </div>

        <div class="row px-9 pb-5 courses-grid">
          @foreach ($courses as $course)            
            <div class="course-card d-flex justify-content-center align-items-center">
                <img class="bg-img-course" src="{{asset('assets/img/banners/'.$course['img'])}}"
                alt="bg-img" />
                <div class="top-course p-5 d-flex flex-column justify-content-between">
                    <div>
                        <img class="py-3" src="{{ asset('assets/img/icons/brands/book.svg') }}" height="60"
                            alt="divider" />
                        <p class="card-title">{{$course['title']}}</p>
                        <p class="card-title">{{$course['subtitle']}}</p>
                    </div>
                   <a href="/course"><button type="button" class="btn btn-white">
                        Подробнее
                    </button></a>
                </div>
            </div>
          @endforeach  
        </div>
    </div>

@endsection
