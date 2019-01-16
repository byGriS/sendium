@extends('layouts.app')

@section('content')
<div class="flex1 flex">
	<div class="flex1 flex flexDirectionColumn">
		<div class="tasksList flex1">
			<div class="tasksListTitle">
				Список задач
			</div>
			@include('tasks.wrapperTasks')
		</div>
	</div>
	@include('tasks.sidebarIndex')
</div>
@endsection
