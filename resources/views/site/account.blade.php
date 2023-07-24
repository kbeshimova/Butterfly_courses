@extends('layouts/blankLayout')

@section('title', 'Home')

@section('content')

    <div class="row h-100 d-flex justify-content-center align-items-center px-xs-5">

        <div class="card mb-4 w-50">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Редактировать аккаунт</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="col-md-6">
                        <label class="form-label" for="basic-default-fullname">Имя</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="basic-default-company">Фамилия</label>
                        <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc.">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe"
                                aria-label="john.doe" aria-describedby="basic-default-email2">
                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                        </div>
                        <div class="form-text">Вы можете использовать буквы, цифры &amp; периоды</div>
                    </div>
                    <div class="mb-3 form-password-toggle ">
                        <label class="form-label" for="basic-default-password12">Пароль</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="basic-default-password12"
                                placeholder="············" aria-describedby="basic-default-password2">
                            <span id="basic-default-password2" class="input-group-text cursor-pointer"><i
                                    class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3 form-password-toggle ">
                        <label class="form-label" for="basic-default-password12">Повторить пароль</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="basic-default-password12"
                                placeholder="············" aria-describedby="basic-default-password2">
                            <span id="basic-default-password2" class="input-group-text cursor-pointer"><i
                                    class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <button type="submit" class="btn btn-outline-primary" >Отменить</button>
                </form>
            </div>
        </div>

    </div>

@endsection
