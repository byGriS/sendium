@extends('layouts.app')

@section('content')

<link href="{{asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{asset('css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-datepicker.ru.min.js') }}" defer></script>


<div class="flex1 flex">
	<form id="projectForm" method="post" action="{{route('project.store')}}" class="form flex1 flex flexDirectionColumn">
		{{csrf_field()}}
		<input type="text" name="title" placeholder="Заголовок проекта" value="{{old('title')}}" required onfocus="InputFocus(this);"/>
		<div class="formBlock flex1 flex flexDirectionColumn">
			<div class="flex flexFlowRowWrap flexAlignItemsCenter">
				<label>Завершение проекта</label>
				<div>
					<div class='input-group date' >
						<input id="datetimepicker" type="text" name="deadline" class="" value="{{date('d.m.Y')}}" readonly required/>
					</div>
				</div>
				<div class="margin10">
					<input type="checkbox" id="nonDeadline" name="nonDeadline" onchange="NonDeadlineChange();" />
					<label for="nonDeadline">Бессрочный</label>
				</div>
			</div>
			<div class="flex flexDirectionColumn flex1">
				<label>Описание (если необоходимо)</label>
				<textarea class="flex1" name="description"></textarea>
			</div>
		</div>
	</form>

	@include('projects.sidebarCreate')
</div>

<script src="{{ asset('js/datetimepicker.js') }}" defer></script>
@endsection
