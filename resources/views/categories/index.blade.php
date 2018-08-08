@extends('layouts.app')

@section('content')
<div class="flex1 flex">
	<div class="flex1 flex flexWrap">
		<div class="newCategory"></div>
		<div class="flex1 listCategory"></div>
	</div>
	@include('categories.sidebarIndex')
</div>
@endsection
