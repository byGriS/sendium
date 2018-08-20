<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<button class="width100 btn btn-sm btn-success" onClick="newArticleOnClick();">Добавить</button>
			</div>
		</div>
	</div>
</div>