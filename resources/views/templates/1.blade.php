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

		<div class="header row">
			<div class="headerTitle col">
				Статьи
			</div>
			<div class="col">
				<form action="#" method="post">
					{{csrf_field()}}
					<label>Константин</label>
					<button class="btn btn-sm btn-dark" type="submit">Выйти</button>
				</form>
			</div>
		</div>

		<div class="newArticle">
			<a href="#" class="btn btn-sm btn-success"><img src="https://png.icons8.com/color/26/000000/plus.png">Создать новую статью</a>
		</div>

		<div class="articleWrapper">
			<div class="article">
				<div class="articleHeader flex flexJustifyContentSpaceBetween">
					<div class="articleTitle">
						Заголовок статьи 1
					</div>
					<div class="articleDate">
						28.06.2018
					</div>
				</div>
				<div class="articlePreview">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus turpis, sodales et eros quis, laoreet interdum urna. In porttitor fringilla libero ac interdum. Cras in accumsan nunc, at vehicula dui. Sed eu tellus non augue hendrerit molestie in et ligula. Phasellus enim magna, maximus sed enim placerat, hendrerit pulvinar odio. Curabitur malesuada sollicitudin porta. Nunc eu commodo felis. Vestibulum blandit quis augue sit amet tincidunt. Nam lorem lectus, ullamcorper imperdiet luctus nec, varius sit amet mi. In in enim facilisis, elementum mauris quis, dictum leo. Morbi ut congue magna.
				</div>
				<div class="articleFooter">
					<a href="#" class="btn btn-sm btn-primary">Читать далее</a>
				</div>
			</div>
			<div class="article">
				
			</div>
			<div class="article">
				
			</div>
		</div>

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
</body>
</html>