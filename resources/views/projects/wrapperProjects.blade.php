<div class="list">
	@foreach($projects as $project)
	<a href="{{route('project.show',$project->id)}}" class="project flex flexDirectionColumn priority-{{$project->priority}} @if($project->overdue) OVERDUE @endif">
		<div class='title'>{{$project->title}}</div>
		<div class="deadline">Срок выполнения: @if($project->deadline == null) Бессрочный @else {{$project->deadline->format('d.m.Y')}} @endif</div>
		<div class="counter">Кол-во задач: {{$project->tasks()->count()}}</div>
	</a>
	@endforeach
</div>
 @include('layouts.pagination', ['paginator' => $projects])