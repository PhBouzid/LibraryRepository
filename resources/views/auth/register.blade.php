
@extends('master')

@section('title','Авторизация')
@section('content')
<div class="container">
    <div class="card card-container">
        <h4 class="text-center mb-3">Регистрация</h4>
       <form method="POST" action="{{ route('register') }}">
                <label for="name">Имя</label>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                <label for="surname">Имя</label>
                <input id="surname" class="form-control" type="text" name="name" :value="old('name')" required autofocus />d
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                <label for="password">Пароль</label>
                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <label for="password_confirmation">Подтверждение</label>

                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">
                    Регистрация
                </button>
            </div>
        </form>
</div>
</div>
@endsection

@section('footscript')
@parent
@endsection
