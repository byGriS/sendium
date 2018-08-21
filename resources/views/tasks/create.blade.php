@extends('layouts.app')

@section('content')

<link href="{{asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/moment.js') }}" defer></script>
<script src="{{ asset('js/moment-with-locales.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}" defer></script>

<script src="{{ asset('js/datetimepicker.js') }}" defer></script>

<div class="flex1 flex">
	<div class="flex1">
		<form id="taskForm" method="post" action="{{route('article.store')}}" class="taskForm flex1 flex flexDirectionColumn">
			{{csrf_field()}}
			<input type="text" class="flex1" name="title" placeholder="Заголовок" value="{{old('title')}}" required onfocus="InputFocus(this);"/>
			<div class="flex flexAlignItemsCenter">
				<label class="flex1">Завершение тендера</label>
				<div class="flex1">
					<div class='input-group date' id='deadlineTask'>
						<input type='text' name="deadlineTask" class="form-control-sm" value="" readonly required/>
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
				</div>
				<div class="flex1"></div>
			</div>
			<div class="flex flexAlignItemsCenter">
				<label class="flex1">Приоритет</label>
				<div class="flex1">
					<select class="custom-select form-control">
						<option>Второстепенная</option>
						<option selected>Обычная</option>
						<option>Важная</option>
						<option>Очень важная</option>
					</select>
				</div>
				<div class="flex1"></div>
			</div>
			<textarea class="flex1" name="text"></textarea>
		</form>

	</div>
	@include('tasks.sidebarCreate')
</div>
@endsection
