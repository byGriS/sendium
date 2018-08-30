@extends('layouts.app')

@section('content')
<div class="flex1 flex">
	<div class="flex1 flex flexDirectionColumn">
		<div class="tasksTape flex">
			@for($i = 0; $i < 7; $i++)
			<div class="tasksDay flex1">	
				<div class="header">
					{{$date->format('d.m')}}
					<?php $date->addDay(); ?>
				</div>
				<div class="tasksDayContent">
					@foreach($tasksDay[$i] as $task)
					<a href="{{route('task.show',$task->id)}}" class="task priority-{{$task->priority}}">
						{{$task->title}}
					</a>
					@endforeach
				</div>
			</div>
			@endfor
		</div>
		<div class="tasksList flex1">
			<div class="title">
			</div>
			@include('tasks.wrapperTasks')
		</div>
	</div>
	@include('tasks.sidebarIndex')
</div>
@endsection
