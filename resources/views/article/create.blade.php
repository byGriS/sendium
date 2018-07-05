@extends('layouts.app')

@section('content')

<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<form id="form" method="post" action="{{route('article.store')}}" class="flex1 flex flexDirectionColumn">
	{{csrf_field()}}
	<textarea class="flex1" name="text"></textarea>
	<div class="flex center margin10">
		<lable class="noWhiteSpace flex1">Укажите категорию</lable>
		<select name="category" class="custom-select form-control-sm flex1">
			<option>Все категории</option>
			<option>Категория 1</option>
			<option>Категория 2</option>
			<option>Категория 3</option>
		</select>	
		<div class="flex1">	
			<button type="submit" class="btn btn-sm btn-success">Добавить</button>
		</div>
	</div>
</form>
<script>
	CKEDITOR.replace("text");
</script>
@endsection
