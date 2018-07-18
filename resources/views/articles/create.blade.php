@extends('layouts.app')

@section('content')

<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

<div class="flex1 flex">
	<div class="flex1">
		<form id="newArticle" method="post" action="{{route('article.store')}}" class="articleForm flex1 flex flexDirectionColumn">
			{{csrf_field()}}
			<input type="text" class="flex1" name="title" placeholder="Заголовок" value="{{old('title')}}" required />
			<textarea class="flex1" name="text"></textarea>
		</form>

	</div>
	@include('articles.sidebarCreate')
</div>
<script>
	CKEDITOR.replace("text");
</script>
@endsection
