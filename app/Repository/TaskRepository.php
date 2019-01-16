<?php 

namespace App\Repository;

use Illuminate\Support\Facades\Auth;
use App\Repository\BaseRepository;
use App\Models\Task;
use App\Services\ConvertDateSQL;
use App\Services\Status;
use App\Services\Priority;
use Carbon\Carbon;

class TaskRepository extends BaseRepository{
	public function __construct(Task $task){
		$this->model = $task;
	}

	public function getAll(){
		$tasks = $this->model->where('owner_id', Auth::user()->id)->where('status','<>',Status::COMPLETE)->orderBy('deadline')->get();
		foreach($tasks as &$task){
			$task->deadline = ConvertDateSQL::FromSQL($task->deadline);
		}
		unset($task);
		return $tasks;
	}

	public function getAllPaginate(){
		$tasks = $this->model->where('owner_id', Auth::user()->id)->where('status','<>',Status::COMPLETE)->orderBy('deadline')->paginate(config('app.pagination.task'));
		foreach($tasks as &$task){
			$task->deadline = ConvertDateSQL::FromSQL($task->deadline);
			$task->priorityStr = Priority::ToString($task->priority);
			if ($task->deadline<Carbon::today()){
				$task->status = Status::OVERDUE;
				$task->overdue = true;
			}else{
				$task->overdue = false;
			}
			$task->statusStr = Status::ToString($task->status);

		}
		unset($task);
		return $tasks;
	}

	public function getAllCompletedPaginate(){
		$tasks = $this->model->where('owner_id', Auth::user()->id)->where('status','=',Status::COMPLETE)->orderBy('deadline', 'desc')->paginate(config('app.pagination.task'));
		foreach($tasks as &$task){
			$task->deadline = ConvertDateSQL::FromSQL($task->deadline);
			$task->priorityStr = Priority::ToString($task->priority);
			$task->statusStr = Status::ToString($task->status);

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
		if ($inputs['projectID'] == 0){
			$task->project_id = null;
		}else{
			$task->project_id = $inputs['projectID'];
		}
		$task->status = 0;
		$task->save();
	}

	public function update(Task $task, $inputs){
		$this->add($task, $inputs);
	}

	public function complete(Task $task){
		$task->status = Status::COMPLETE;
		$task->save();
	}

	public function return(Task $task){
		$task->status = Status::WORK;
		$task->save();	
	}

	public function convertDateToFront(Task $task){
		$task->deadline = ConvertDateSQL::FromSQL($task->deadline);
	}
}