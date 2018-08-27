<?php 

namespace App\Repository;

use Illuminate\Support\Facades\Auth;
use App\Repository\BaseRepository;
use App\Models\Task;
use App\Services\ConvertDateSQL;

class TaskRepository extends BaseRepository{
	public function __construct(Task $task){
		$this->model = $task;
	}

	public function getAll(){
		$tasks = $this->model->where('owner_id', Auth::user()->id)->orderBy('deadline')->get();
		foreach($tasks as &$task){
			$task->deadline = ConvertDateSQL::FromSQL($task->deadline);
		}
		unset($task);
		return $tasks;
	}

	public function add(Task $task, $inputs){
		$task->title = $inputs['title'];
		$task->deadline = ConvertDateSQL::ToSQL($inputs['deadline']);
		$task->priority = $inputs['priority'];
		$task->text = $inputs['text'];
		$task->owner_id = Auth::user()->id;
		$task->status = 0;
		$task->save();
	}

	public function update(Task $task, $inputs){
		
	}
}