<div class="headerMenu flex">
	<div class="newArticle width33 widthMin100px">
		<a href="{{route('article.create')}}" class="btn btn-sm btn-success"><img src="https://png.icons8.com/color/26/000000/plus.png">Создать новую статью</a>
	</div>
	<div class="width33 widthMin100px">
		<select class="custom-select form-control-sm">
			<option>Все категории</option>
			@foreach($categories as $category)
			<option>{{$category->title}}</option>
			@endforeach
		</select>
	</div>
	<div class="width33 widthMin100px">
		<form class="form-inline float-right" method="post" action="#">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" class="form-control-sm search-query">
				<button type="submit" class="btn btn-sm">Поиск</button>
			</div>
		</form>
	</div>
</div>