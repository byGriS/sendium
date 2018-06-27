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
</head>
<body>
	<div class="navigation">
		<div class="minMenu" onclick="MenuOnClick();"></div>
		<ul>
			<li class="active">Главная</li>
			<li>Заметки</li>
			<li>Задачи</li>
			<li>Проекты</li>
			<hr/>
			<li>Контакты</li>
			<li>Категории</li>
			<li>Настройки</li>
		</ul>

	</div>
	<div class="wrapper container-fluid">
		wrapper<br/> test
	</div>
	<div class="sidebar">
		sidebar

	</div>
</body>
</html>