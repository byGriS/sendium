@extends('layouts.app')

@section('content')
@include('article.header')

<div class="articleWrapper">
	@foreach($articles as $article)
	<div class="article">
		<div class="articleHeader flex flexJustifyContentSpaceBetween">
			<div class="articleTitle">
				{{$article->title}}
			</div>
			<div class="articleDate">
				{{$article->created_at}}
			</div>
		</div>
		<div class="articlePreview">
			{!!$article->preview !!}
		</div>
		<div class="articleFooter flex flexJustifyContentSpaceBetween">
			<a href="#" class="btn btn-sm btn-primary">Читать далее</a>
			<a href="#" class="btn btn-sm btn-success">Редактировать</a>
		</div>
	</div>
	@endforeach

	<div class="article">
		<div class="articleHeader flex flexJustifyContentSpaceBetween">
			<div class="articleTitle">
				Заголовок статьи 1
			</div>
			<div class="articleDate">
				28.06.2018
			</div>
		</div>
		<div class="articlePreview">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus turpis, sodales et eros quis, laoreet interdum urna. In porttitor fringilla libero ac interdum. Cras in accumsan nunc, at vehicula dui. Sed eu tellus non augue hendrerit molestie in et ligula. Phasellus enim magna, maximus sed enim placerat, hendrerit pulvinar odio. Curabitur malesuada sollicitudin porta. Nunc eu commodo felis. Vestibulum blandit quis augue sit amet tincidunt. Nam lorem lectus, ullamcorper imperdiet luctus nec, varius sit amet mi. In in enim facilisis, elementum mauris quis, dictum leo. Morbi ut congue magna.
		</div>
		<div class="articleFooter flex flexJustifyContentSpaceBetween">
			<a href="#" class="btn btn-sm btn-primary">Читать далее</a>
			<a href="#" class="btn btn-sm btn-success">Редактировать</a>
		</div>
	</div>

</div>

@include('layouts.pagination')
@endsection
