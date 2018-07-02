<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/script.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/flexbox.css') }}" rel="stylesheet">
</head>
<body>
  <div class="signin flex text-center">
    <form class="form-signin" method="post" action="#">
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
      <label for="inputName" class="sr-only">Имя</label>
      <input type="text" id="inputName" class="form-control" placeholder="Имя" required autofocus>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control registryInput" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="inputPassword" class="form-control registryPassword" placeholder="Пароль" required>
      <label for="confirmPassword" class="sr-only">Повторите пароль</label>
      <input type="password" id="confirmPassword" class="form-control" placeholder="Повторите пароль" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
      <a href="#">Уже зарегистрирован?</a>
    </form>
  </div>
</body>
</html>