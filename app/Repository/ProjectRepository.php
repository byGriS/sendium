<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

use App\Repository\BaseRepository;
use App\Models\Project;
use App\Services\Status;
use App\Services\ConvertDateSQL;
use Carbon\Carbon;

class ProjectRepository extends BaseRepository{

	public function __construct(Project $project){
		$this->model = $project;
	}

	public function add($inputs, Project $project = null){
		if ($project == null){
			$project = new Project();
		}
		$project->title = $inputs['title'];
		$project->description = $inputs['description'];
		$project->status = Status::WORK;
		if (isset($inputs['nonDeadline'])){
			$project->deadline = null;
		}else{
			$project->deadline = ConvertDateSQL::ToSQL($inputs['deadline']);
		}
		//$project->save();
		Auth::user()->projects()->save($project);
	}

	public function update(Project $project, $inputs){
		$this->add($inputs, $project);
	}

	public function complete(Project $project){
		$project->status = Status::COMPLETE;
		$project->save();
	}

	public function convertDateToFront(Project $project){
		$project->deadline = ConvertDateSQL::FromSQL($project->deadline);
	}

	public function getAll(){
		$projects = Auth::user()->projects()->where('status','<>',Status::COMPLETE)->paginate(3);
		foreach($projects as &$project){
			$project->deadline = ConvertDateSQL::FromSQL($project->deadline);
			if ($project->deadline<Carbon::today()){
				$project->status = Status::OVERDUE;
				$project->overdue = true;
			}else{
				$project->overdue = false;
			}
			$project->statusStr = Status::ToString($project->status);
		}
		unset($project);
		return $projects;
	}
}