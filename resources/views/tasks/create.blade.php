@extends('layouts.app')

@section('content')

<link href="{{asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{asset('css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-datepicker.ru.min.js') }}" defer></script>


<div class="flex1 flex">
		<form id="taskForm" method="post" action="{{route('task.store')}}" class="taskForm flex1 flex flexDirectionColumn">
			{{csrf_field()}}
			<input type="text" class="" name="title" placeholder="Заголовок" value="{{old('title')}}" required onfocus="InputFocus(this);"/>
			<div class="tasksBlock flex1 flex flexDirectionColumn">
				<div class="flex flexFlowRowWrap flexAlignItemsCenter">
					<label>Завершение задачи</label>
					<div>
						<div class='input-group date' >
							<input id="datetimepicker" type="text" name="deadline" class="" value="{{date('d.m.Y')}}" readonly required/>
						</div>
					</div>
				</div>
				<div class="flex flexFlowRowWrap flexAlignItemsCenter">
					<label>Приоритет</label>
					<div>
						<select class="custom-select form-control" name="priority">
							<option value='0'>Второстепенная</option>
							<option selected value='1'>Обычная</option>
							<option value='2'>Важная</option>
							<option value='3'>Очень важная</option>
						</select>
					</div>
				</div>
				<div class="flex flexDirectionColumn flex1">
					<label>Описание (если необоходимо)</label>
					<textarea class="flex1" name="text"></textarea>
				</div>
			</div>
		</form>

	@include('tasks.sidebarCreate')
</div>

<script src="{{ asset('js/datetimepicker.js') }}" defer></script>
@endsection
