<?php 

namespace App\Repository;

use App\Repository\BaseRepository;
use App\Models\Task;

class TaskRepository extends BaseRepository{
	public function __construct(Task $task){
		$this->model = $task;
	}

	public function getAll(){
		return $this->model->all();
	}

	public function add(Task $task, $inputs){
	}

	public function update(Task $task, $inputs){
		
	}
}