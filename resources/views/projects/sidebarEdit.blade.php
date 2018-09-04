<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<button class="width100 btn btn-sm btn-primary" onclick="SubmitProject()">Изменить</button>
			</div>
			<div class="sidebarBlock">
				<form method="POST" action="{{route('taskComplete',$project->id)}}">
					@csrf
					<input type='hidden' name='id' value='{{$project->id}}'/>
					<button class="width100 btn btn-sm btn-success">Завершить</button>
				</form>
			</div>
			<div class="sidebarBlock">
				<form method="POST" action="{{route('project.destroy',$project->id)}}">
					@csrf
					@method('DELETE')
					<input type='hidden' name='id' value='{{$project->id}}'/>
					<button class="width100 btn btn-sm btn-danger">Удалить</button>
				</form>
			</div>
		</div>
	</div>
</div>