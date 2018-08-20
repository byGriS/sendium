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
		$tasksDay = array_fill(0, 7, array());
		
		return view('tasks.index', compact('tasks', 'date','tasksDay'));
	}

	public function create(){
		return view('tasks.create');
	}

	public function store(Request $request){
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
