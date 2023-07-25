@extends('layouts/blankLayout')

@section('title', 'Home')


@section('content')

    <div class="row h-100  d-flex justify-content-center align-items-center px-xs-5">
        <div class="card w-25 w-xs-100">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img class="py-3" src="{{ asset('assets/img/icons/brands/logo-book.svg') }}" height="60"
                                alt="divider" />
                        </span>
                        <span class="app-brand-text demo text-body fw-bold">Butterfly</span>
                    </a>
                </div>
                <!-- /Logo -->

                <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Ф.И.О</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter your username" autofocus="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter your email">
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Пароль</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                            <label class="form-check-label" for="terms-conditions">
                                я согласен с
                                <a href="javascript:void(0);">политикой конфиденциальности &amp; условия</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary d-grid w-100">
                        Зарегестрироваться
                    </button>
                </form>

                <p class="text-center">
                    <span>Уже есть аккаунт?</span>
                    <a href="/login">
                        <span>Войдите</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
