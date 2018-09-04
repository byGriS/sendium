@extends('layouts.app')

@section('content')

<link href="{{asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{asset('css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-datepicker.ru.min.js') }}" defer></script>


<div class="flex1 flex">
	<form id="projectForm" method="post" action="{{route('project.update', $project->id)}}" class="form flex1 flex flexDirectionColumn">
		{{csrf_field()}}
		@method('PUT')
		<input type="text" class="" name="title" placeholder="Заголовок" value="{{$project->title}}" required onfocus="InputFocus(this);"/>
		<div class="tasksBlock flex1 flex flexDirectionColumn">
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label>Завершение задачи</label>
				<div>
					<div class='input-group date' >
						<input id="datetimepicker" type="text" name="deadline" 
						value="@if($project->deadline!=null) {{$project->deadline->format('d.m.Y')}} @endif" 
						readonly
						@if($project->deadline == null) disabled @endif
						/>
					</div>
				</div>
				<div class="margin10">
					<input type="checkbox" id="nonDeadline" name="nonDeadline" onchange="NonDeadlineChange();" @if($project->deadline == null) checked @endif/>
					<label for="nonDeadline">Бессрочный</label>
				</div>
			</div>
			<div class="flex flexDirectionColumn flex1">
				<label>Описание (если необоходимо)</label>
				<textarea class="flex1" name="description">{!!$project->text!!}</textarea>
			</div>
		</div>
	</form>

	@include('projects.sidebarEdit')
</div>

<script src="{{ asset('js/datetimepicker.js') }}" defer></script>
@endsection
