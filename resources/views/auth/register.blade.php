<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Электронная библиотека</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

</head>
<body>


<div class="container">

    <div class="card card-container">
        <h4 class="text-center mb-3">Регистрация</h4>
        @if (count($errors) > 0)
        <div class="alert alert-danger" autofocus>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
       <form method="POST" action="{{ route('register') }}">
        @csrf
                <label for="name">Имя</label>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                <label for="surname">Фамилия</label>
                <input id="surname" class="form-control" type="text" name="surname" :value="old('surname')" required autofocus />
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                <label for="password">Пароль</label>
                <input id="password" class="form-control"
                                type="password"
                                name="password"
                                :value="old('password')"
                                required autocomplete="password" />

                <label for="password_confirmation" >Подтверждение</label>

                <input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">
                    Регистрация
                </button>
            </div>
        </form>
</div>
</div>
</body>
</html>


