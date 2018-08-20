@extends('layouts.app')

@section('content')
<div class="flex1 flex">
	<div class="flex1">
		tasks	
	</div>
	@include('tasks.sidebarIndex')
</div>
@endsection
