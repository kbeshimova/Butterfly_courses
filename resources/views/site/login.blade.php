@extends('layouts/blankLayout')

@section('title', 'Home')


@section('content')

    <div class="row h-100 d-flex justify-content-center align-items-center px-xs-5">

        <div class="card w-25 w-xs-100 ">
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
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email-username"
                            placeholder="Enter your email or username" autofocus="">
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Пароль</label>
                            <a href="auth-forgot-password-basic.html">
                                <small>Забыли пароль </small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">
                                Запомнить меня
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="/account"><button class="btn btn-primary d-grid w-100" type="button">Войти</button></a>
                    </div>
                </form>

                <p class="text-center">
                    <span>Не зарегестрированы?</span>
                    <a href="/register">
                        <span>Создать новый аккаунт</span>
                    </a>
                </p>
            </div>
        </div>

    @endsection

