<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<button class="width100 btn btn-sm btn-success" onClick="AddTask();">Добавить</button>
			</div>
			<div class="sidebarBlock">
				<button type="submit" class="width100 btn btn-sm btn-success" onClick="newArticleOnClick();">Изменить</button>	
			</div>
			<div class="sidebarBlock">
				<button class="width100 btn btn-sm btn-danger" onClick="ArticleFormDelete();">Удалить</button>
			</div>
		</div>
	</div>
</div>