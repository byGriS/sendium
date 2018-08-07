@extends('layouts.app')

@section('content')
{{-- @include('articles.header') --}}
<div class="flex1 flex">
	<div class="flex1">
		<div class="articleWrapper">
			@include('articles.wrapperArticles')
		</div>
		{{-- @include('layouts.pagination') --}}
	</div>
	@include('articles.sidebarIndex')
</div>
@endsection
