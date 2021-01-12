@extends('master')

@section('title','Авторизация')

@section('content')
    <div class="container">
        <div class="card card-container">
            <h4 class="text-center mb-3">Авторизация</h4>
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        <span id="reauth-email" class="reauth-email"></span>
                        <label for="email">Email</label>
                        <input id="inputEmail" class="form-control" placeholder="Email"  type="email" name="email" :value="old('email')" required autofocus />
                        <!-- Password -->
                        <label for="password">Пароль</label>
                        <input id="inputPassword" class="form-control" placeholder="Пароль"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        <!-- Remember Me -->
                        <div id="remember" class="checkbox">
                            <label>
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember"> Запомнить меня
                            </label>
                        </div>
                                <a class="forgot-password" href="{{route('password.request')}}">
                                    Забыли пароль?
                                </a>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">
                            Вход
                        </button>
                </form>
        </div>
    </div>
    @endsection

    @section('footscript')
        @parent
    @endsection
