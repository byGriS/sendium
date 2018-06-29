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
	<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/flexbox.css') }}" rel="stylesheet">
</head>
<body>
	<div class="navigation">
		<div class="minMenu" onclick="MenuOnClick();"></div>
		<ul>
			<li>Главная</li>
			<li class="active">Статьи</li>
			<li>Задачи</li>
			<li>Проекты</li>
			<hr/>
			<li>Контакты</li>
			<li>Категории</li>
			<li>Настройки</li>
		</ul>

	</div>
	<div class="wrapper container-fluid flex flexDirectionColumn flexJustifyContentCenter">

		<div class="header flex">
			<div class="headerTitle col">
				Новая статья
			</div>
			<div class="col">
				<form action="#" method="post">
					{{csrf_field()}}
					<label>Константин</label>
					<button class="btn btn-sm btn-dark" type="submit">Выйти</button>
				</form>
			</div>
		</div>

		<form id="form" method="post" action="#" class="flex1 flex flexDirectionColumn">
			{{csrf_field()}}
			<textarea class="flex1" name="text"></textarea>
			<div class="center margin10">
				<button type="submit" class="btn btn-sm btn-success">Добавить</button>
				<button type="submit" class="btn btn-sm btn-danger">Удалить</button>
			</div>
		</form>

	</div>
	<div class="sidebar">
		<div class="sidebarBlock sidebarDate">
			<div class="sidebarBlock sidebarDay">
				28
			</div>
			<div class="sidebarBlock sidebarMonth">
				Июнь 2018
			</div>
		</div>

	</div>

	<script>
		var form = document.getElementById('form');
		var heightCKEditor = form.offsetHeight - 150;
		if (heightCKEditor < 400){
			heightCKEditor = 300;
		}

		CKEDITOR.replace("text");//, { height:heightCKEditor+'px' });
	</script>
</body>
</html>