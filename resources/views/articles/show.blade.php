@extends('layouts.app')

@section('content')

<h1 class='articleTitleShow'>{{$article->title}}</h1>
<div class='articleTextShow'>
	{!! $article->text !!}
</div>
<div class="flex flexDirectionRowRev margin10">
	<a href="{{route('article.edit', $article->id)}}" class="btn btn-sm btn-success">Редактировать</a>
</div>

@endsection
