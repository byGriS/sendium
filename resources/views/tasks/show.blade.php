@extends('layouts.app')

@section('content')

<div class="flex1 flex">
	<div class="taskForm taskShow flex1 flex flexDirectionColumn">
		<div id="taskID" hidden>{{$task->id}}</div>
		<div class="title">{{$task->title}}</div>
		<div class="tasksBlock flex1 flex flexDirectionColumn">
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label><b>Статус</b></label>
				<label>{{$task->statusStr}}</label>
			</div>
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label><b>Завершение задачи</b></label>
				<label>{{$task->deadline->format('d.m.Y')}}</label>
			</div>
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label><b>Приоритет</b></label>
				<label>{{$task->priorityStr}}</label>
			</div>
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label><b>Проект</b></label>
				<label>@if ($task->project_id == null) Без проекта @else {{$task->project->title}}@endif</label>
			</div>
			@if ($task->text != "")
			<div class="flex flexDirectionColumn flex1">
				<label>Описание</label>
				<div class="flex1 text">
					{!! $task->text !!}
				</div>
			</div>
			@endif
		</div>
	</div>

	@include('tasks.sidebarShow')
</div>
@endsection
