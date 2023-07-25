@extends('layouts/blankLayout')

@section('title', 'Home')

@section('content')

@php
$orders = [
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Продвинутый', 'payment' => '100$', 'btn-class' => 'bg-label-primary'],
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Начинающий', 'payment' => '100$', 'btn-class' => 'bg-label-info'],
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Продвинутый', 'payment' => '100$', 'btn-class' => 'bg-label-primary'],
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Начинающий', 'payment' => '100$', 'btn-class' => 'bg-label-info'],
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Продвинутый', 'payment' => '100$', 'btn-class' => 'bg-label-primary'],
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Начинающий', 'payment' => '100$', 'btn-class' => 'bg-label-info'],
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Продвинутый', 'payment' => '100$', 'btn-class' => 'bg-label-primary'],
    ['id' => '00225', 'date' => '08/10/2023', 'name' => 'Albert Cook', 'course' => 'Начинающий ', 'payment' => '100$', 'btn-class' => 'bg-label-info'],

];
@endphp

    <div class="container-xxl pt-7  flex-grow-1 container-p-y">
        <div class="card mt-0">
            <h5 class="card-header">История заказов </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Дата</th>
                            <th>Ф.И.О</th>
                            <th>Курс</th>
                            <th>Стоимость</th>
                        </tr> 
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($orders as $order) 
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$order['id']}}</strong></td>
                            <td>{{$order['date']}}</td>
                            <td>{{$order['name']}}</td>
                            <td><span class="badge {{$order['btn-class']}} me-1">{{$order['course']}}</span></td>
                            <td>{{$order['payment']}}</td>
                        </tr>
                        @endforeach 
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
