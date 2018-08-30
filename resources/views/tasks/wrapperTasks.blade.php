<div class="list">
	@foreach($tasks as $task)
	<a href="{{route('task.show',$task->id)}}" class="task flex priority-{{$task->priority}} @if($task->overdue) OVERDUE @endif">
		<div class="title flex1">
			{{$task->title}}
		</div>
		<div class="status">
			{{$task->statusStr}}
		</div>
		<div class="deadline">
			{{$task->deadline->format('d.m.Y')}}
		</div>
	</a>
	@endforeach
</div>
@include('layouts.pagination', ['paginator' => $tasks])