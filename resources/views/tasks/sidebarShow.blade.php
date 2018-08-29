<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">		
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				<a href="{{route('task.edit', $task->id)}}" class="width100 btn btn-sm btn-primary">Редактировать</a>
			</div>
			<div class="sidebarBlock">
				<form method="POST" action="{{route('taskComplete',$task->id)}}">
					@csrf
					<input type='hidden' name='id' value='{{$task->id}}'/>
					<button class="width100 btn btn-sm btn-success">Завершить</button>
				</form>
			</div>
			<div class="sidebarBlock">
				<form method="POST" action="{{route('task.destroy',$task->id)}}">
					@csrf
					@method('DELETE')
					<input type='hidden' name='id' value='{{$task->id}}'/>
					<button class="width100 btn btn-sm btn-danger">Удалить</button>
				</form>
			</div>
		</div>
	</div>
</div>