@extends('layouts.app')

@section('content')

<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

<div class="flex1 flex">
	<div class="flex1">
		<form id="articleForm" method="POST" action="{{route('article.update', $article->id)}}" class="articleForm flex1 flex flexDirectionColumn">
			{{csrf_field()}}
			{{ method_field("PUT") }}
			<input type="text" class="flex1" name="title" placeholder="Заголовок" value="{{$article->title}}" required  onfocus="InputFocus(this);" />
			<textarea class="flex1" name="text">{{$article->text}}</textarea>
		</form>
	</div>
	@include('articles.sidebarEdit')
</div>

<script>
	CKEDITOR.replace("text");
</script>
@endsection
