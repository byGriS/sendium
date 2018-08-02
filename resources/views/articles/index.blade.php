@extends('layouts.app')

@section('content')
{{-- @include('articles.header') --}}
<div class="flex1 flex">
	<div class="flex1">
		<div class="articleWrapper">
			@foreach($articles as $article)
			<div class="article">
				<div class="articleHeader flex flexJustifyContentSpaceBetween">
					<div class="articleTitle">
						{{$article->title}}
					</div>
					<div class="articleDate">
						{{$article->created_at}}<br/>
						{{$article->category->title}}
					</div>
				</div>
				<div class="articlePreview">
					{!!$article->preview !!}
				</div>
				<div class="articleFooter flex flexJustifyContentSpaceBetween">
					<a href="{{route('article.show',$article->id)}}" class="btn btn-sm btn-primary">Читать далее</a>
					<a href="{{route('article.edit',$article->id)}}" class="btn btn-sm btn-success">Редактировать</a>
				</div>
			</div>
			@endforeach

		</div>
		@include('layouts.pagination', ['paginator' => $articles])
		{{-- @include('layouts.pagination') --}}
	</div>
	@include('articles.sidebarIndex')
</div>
@endsection
