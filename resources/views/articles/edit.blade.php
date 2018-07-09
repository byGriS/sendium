@extends('layouts.app')

@section('content')

<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<form id="form" method="POST" action="{{route('article.update', $article->id)}}" class="articleForm flex1 flex flexDirectionColumn">
	{{csrf_field()}}
	{{ method_field("PUT") }}
	<input type="text" class="flex1" name="title" placeholder="Заголовок" value="{{$article->title}}" required />
	<textarea class="flex1" name="text">{{$article->text}}</textarea>
	<div class="flex center margin10">
		<lable class="noWhiteSpace flex1">Укажите категорию</lable>
		<select name="category" class="custom-select form-control-sm flex1">
			@foreach($categories as $category)
			<option @if($category->id == $article->category_id) selected @endif>{{$category->title}}</option>
			@endforeach
		</select>	
		<div class="flex1">	
			<button type="submit" class="btn btn-sm btn-success">Изменить</button>	
			<button class="btn btn-sm btn-danger" onClick="ArticleFormDelete();">Удалить</button>			
		</div>
	</div>
</form>
<script>
	CKEDITOR.replace("text");
</script>
@endsection
