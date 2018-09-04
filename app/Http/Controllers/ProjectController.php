<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Services\Priority;
use App\Services\Status;
use App\Models\Project;
use App\Repository\ProjectRepository;

class ProjectController extends Controller{

	protected $projectModel;

	public function __construct(ProjectRepository $project){
		
		$this->projectModel = $project;
	}

	public function index(){
		$projects = $this->projectModel->getAll();
		return view('projects.index', compact('projects'));
	}

	public function create(){
		return view('projects.create');
	}

	public function store(Request $request){
		$this->projectModel->add($request->all(), new Project());
		return redirect('project');
	}

	public function show(Project $project){
		$project->statusStr = Status::ToString($project->status);
		$project->text = str_replace("\r\n","<br/>", $project->text);
		$this->projectModel->convertDateToFront($project);
		return view('projects.show', compact('project'));
	}

	public function complete(Project $project){
		$this->projectModel->complete($project);
		return redirect('project');
	}

	public function edit(Project $project){
		if ($project->deadline != null)
			$this->projectModel->convertDateToFront($project);
		return view('projects.edit', compact('project'));
	}

	public function update(Request $request, Project $project){
		$this->projectModel->update($project, $request->all());
		return redirect('project');
	}

	public function destroy($id){
		$this->projectModel->destroy($id);
		return redirect('project');
	}
}
