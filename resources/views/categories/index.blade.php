@extends('layouts.app')

@section('content')
<div class="flex1 flex">
	<div class="flex1 flex flexFlowRowWrap flexAlignContentStart">
		<div class="newCategory">
			<form method="post" action="{{route('category.store')}}">
				@csrf
				<div class="form-group">
					<label>Новая категория</label>
					<input class="form-control" name="title">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-sm btn-primary">Добавить</button>
				</div>
			</form>
		</div>
		<div class="flex1 listCategory">
			@foreach($categories as $category)
			<div class="category">
				@include('categories.formCategory')
			</div>
			@endforeach
		</div>
	</div>
	@include('categories.sidebarIndex')
</div>
@endsection
