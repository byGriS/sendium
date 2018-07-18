@extends('layouts.app')

@section('content')

<div class="flex1 flex">
	<div class="flex1">
		<h1 class='articleTitleShow'>{{$article->title}}</h1>
		<div class='articleTextShow'>
			{!! $article->text !!}
		</div>
	</div>
	@include('articles.sidebarShow')
</div>

@endsection
