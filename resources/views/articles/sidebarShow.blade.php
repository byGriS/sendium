<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">		
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<a href="{{route('article.edit', $article->id)}}" class="width100 btn btn-sm btn-success">Редактировать</a>
			</div>
		</div>
	</div>
</div>