<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Repository\TaskRepository;


class TaskController extends Controller{

	protected $taskModel;

	public function __construct(TaskRepository $tasks){
		$this->taskModel = $tasks;
	}


	public function index(){

		$tasks = $this->taskModel->getAll();
		return view('tasks.index', compact('tasks'));
	}

	public function create(){
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
