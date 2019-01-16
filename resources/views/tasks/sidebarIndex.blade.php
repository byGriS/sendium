<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<a href="{{route('task.create')}}" class="width100 btn btn-sm btn-success">Создать</a>
			</div>
			<div class="sidebarBlock">
				<a href="{{route('task.index')}}" class="width100 btn btn-sm btn-primary">Текущие</a>
			</div>
			<div class="sidebarBlock">
				<a href="{{route('tasks.completed')}}" class="width100 btn btn-sm btn-secondary">Завершенные</a>
			</div>
		</div>
	</div>
</div>