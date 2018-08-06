<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				Категория
				<select id="categorySelect" class="custom-select form-control-sm flex1">
					@foreach($categories as $category)
					<option>{{$category->title}}</option>
					@endforeach
				</select>	
			</div>
			<div class="sidebarBlock">
				<button class="width100 btn btn-sm btn-success" onClick="newArticleOnClick();">Добавить</button>
			</div>
		</div>
	</div>
</div>