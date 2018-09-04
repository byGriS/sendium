@extends('layouts.app')

@section('content')
<div class="flex1 flex">
	<div class="flex1">
		<div class="projectsWrapper">
			@include('projects.wrapperProjects')
		</div>
	</div>
	@include('projects.sidebarIndex')
</div>
@endsection
