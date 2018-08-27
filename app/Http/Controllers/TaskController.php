<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Task;
use App\Repository\TaskRepository;


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

		return view('tasks.index', compact('tasks', 'date','tasksDay'));
	}

	public function create(){
		return view('tasks.create');
	}

	public function store(Request $request){
		$this->taskModel->add(new Task(), $request->all());
		return redirect('task');
	}

	public function show($id){
	}

	public function edit($id){
	}

	public function update(Request $request, $id){
	}

	public function destroy($id){
	}
}
