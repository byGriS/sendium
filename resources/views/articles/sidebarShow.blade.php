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
				<a href="{{route('article.edit', $article->id)}}" class="width100 btn btn-sm btn-success">Редактировать</a>
			</div>
		</div>
	</div>
</div>