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