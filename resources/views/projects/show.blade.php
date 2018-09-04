@extends('layouts.app')

@section('content')

<div class="flex1 flex">
	<div class="form projectShow flex1 flex flexDirectionColumn">
		<div id="projectID" hidden>{{$project->id}}</div>
		<div class="title">{{$project->title}}</div>
		<div class="formBlock flex1 flex flexDirectionColumn">
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label><b>Статус</b></label>
				<label>{{$project->statusStr}}</label>
			</div>
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label><b>Завершение проекта</b></label>
				<label>@if($project->deadline == null) Бессрочный@else{{$project->deadline->format('d.m.Y')}}@endif</label>
			</div>
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label><b>Кол-во задач:</b></label>
				<label>{{$project->tasks()->count()}}</label>
			</div>
			@if ($project->text != "")
			<div class="flex flexDirectionColumn flex1">
				<label>Описание</label>
				<div class="flex1 text">
					{!! $project->text !!}
				</div>
			</div>
			@endif
		</div>
	</div>

	@include('projects.sidebarShow')
</div>
@endsection