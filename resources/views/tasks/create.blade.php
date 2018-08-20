@extends('layouts.app')

@section('content')

<div class="flex1 flex">
	<div class="flex1">
		<form id="articleForm" method="post" action="{{route('article.store')}}" class="articleForm flex1 flex flexDirectionColumn">
			{{csrf_field()}}
			<input type="text" class="flex1" name="title" placeholder="Заголовок" value="{{old('title')}}" required onfocus="InputFocus(this);"/>
			<textarea class="flex1" name="text"></textarea>
		</form>

	</div>
	@include('tasks.sidebarCreate')
</div>
@endsection
