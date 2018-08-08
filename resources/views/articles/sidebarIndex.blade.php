<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<a href="{{route('article.create')}}" class="width100 btn btn-sm btn-success">Создать</a>
			</div>
			<div class="sidebarBlock">
				Фильтр
				<form id="filterCategory" method="get" action="{{route('articleFilter')}}">
					<select class="custom-select form-control-sm" name="category" onchange="categoryFilterChange(this);">
						<option>Все категории</option>
						@foreach($categories as $category)
						<option @if (!empty(app('request')->input('category')) && (app('request')->input('category') == $category->title)) selected @endif>{{$category->title}}</option>
						@endforeach
					</select>
				</form>
			</div>
			<div class="sidebarBlock">
				Поиск
				<form class="form flex" method="get" action="{{route('articleSearch')}}">			
					<input type="text" name="search" class="form-control-sm">
					<button type="submit" class="btn btn-sm"><img src="https://png.icons8.com/material/18/000000/search.png"></button>
				</form>
			</div>
		</div>
	</div>
</div>