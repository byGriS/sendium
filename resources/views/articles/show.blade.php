@extends('layouts.app')

@section('content')

<h1 class='articleTitle'>{{$article->title}}</h1>
<div class='articleText'>
	{!! $article->text !!}
</div>
<div class="flex flexDirectionRowRev margin10">
	<a href="{{route('article.edit', $article->id)}}" class="btn btn-sm btn-primary ">Редактировать</a>
</div>

@endsection
