<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Task;
use App\Repository\TaskRepository;
use App\Services\Priority;
use App\Services\Status;


class TaskController extends Controller{

	protected $taskModel;

	public function __construct(TaskRepository $tasks){
		$this->taskModel = $tasks;
	}

	public function index(){
		$tasks = $this->taskModel->getAll();
		$date = Carbon::now();
		$dateService = Carbon::now();
		$tasksDay = array_fill(0, 7, array());	
		for($i = 0; $i < 7; $i++){
			foreach($tasks as $task){
				if ($task->deadline->format("Y-m-d") == $dateService->format("Y-m-d")){
					array_push($tasksDay[$i], $task);
				}
			}
			$dateService = $dateService->addDays(1);
		}

		$tasks = $this->taskModel->getAllPaginate();
		return view('tasks.index', compact('tasks', 'date','tasksDay'));
	}

	public function indexCompleted(){
		$tasks = $this->taskModel->getAllCompletedPaginate();
		return view('tasks.indexCompleted', compact('tasks'));
	}

	public function create(){
		$projects = Auth::user()->projects;
		return view('tasks.create', compact('projects'));
	}

	public function store(Request $request){
		$this->taskModel->add(new Task(), $request->all());
		return redirect('task');
	}

	public function show(Task $task){
		$task->priorityStr = Priority::ToString($task->priority);
		$task->statusStr = Status::ToString($task->status);
		$task->text = str_replace("\r\n","<br/>", $task->text);
		$this->taskModel->convertDateToFront($task);
		return view('tasks.show', compact('task'));
	}

	public function complete(Task $task){
		$this->taskModel->complete($task);
		return redirect('task');
	}

	public function return(Task $task){
			$this->taskModel->return($task);
		return redirect('task');
	}

	public function edit(Task $task){
		$this->taskModel->convertDateToFront($task);
		$projects = Auth::user()->projects;
		return view('tasks.edit', compact('task', 'projects'));
	}

	public function update(Request $request, Task $task){
		$this->taskModel->update($task, $request->all());
		return redirect('task');
	}

	public function destroy(Task $task){
		$this->taskModel->destroy($task->id);
		return redirect('task');
	}
}
