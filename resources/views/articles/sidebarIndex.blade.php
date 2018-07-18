<div class="sidebar">
	<div class="minDate center">28.06</div>
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="sidebarDate">
			<div class="sidebarDay">
				28
			</div>
			<div class="sidebarMonth">
				Июнь 2018
			</div>
		</div>
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<a href="{{route('article.create')}}" class="width100 btn btn-sm btn-success">Создать</a>
			</div>
			<div class="sidebarBlock">
				Фильтр
				<select class="custom-select form-control-sm">
					<option>Все категории</option>
					@foreach($categories as $category)
					<option>{{$category->title}}</option>
					@endforeach
				</select>
			</div>
			<div class="sidebarBlock">
				Поиск
				<form class="form flex" method="post" action="#">
					{{csrf_field()}}				
					<input type="text" class="form-control-sm">
					<button type="submit" class="btn btn-sm"><img src="https://png.icons8.com/material/18/000000/search.png"></button>
				</form>
			</div>
		</div>
	</div>
</div>