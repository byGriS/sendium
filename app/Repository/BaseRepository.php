<?php

namespace App\Repository;

abstract class BaseRepository{
	protected $model;

	public function getById($id){
		return $this->model->findOrFail($id);
	}

	public function destroy($id){
		$this->getById($id)->delete();
	}
}
