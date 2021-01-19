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
            <h4 class="text-center mb-3">Авторизация</h4>
            @if (count($errors) > 0)
            <div class="alert alert-danger" autofocus>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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
</body>
</html>

