<div class="headerMenu row">
	<div class="col-sm newArticle">
		<a href="{{route('article.create')}}" class="btn btn-sm btn-success"><img src="https://png.icons8.com/color/26/000000/plus.png">Создать новую статью</a>
	</div>
	<div class="col-sm">
		<select class="custom-select form-control-sm">
			<option>Все категории</option>
			<option>Категория 1</option>
			<option>Категория 2</option>
			<option>Категория 3</option>
		</select>
	</div>
	<div class="col-sm">
		<form class="form-inline float-right" method="post" action="#">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control-sm search-query">
				<button type="submit" class="btn btn-sm">Поиск</button>
			</div>
		</form>
	</div>
</div>