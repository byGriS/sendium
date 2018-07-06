<?php 

namespace App\Repository;

use App\Repository\BaseRepository;
use App\Models\Category;

class CategoryRepository extends BaseRepository{
	public function __construct(Category $category){
		$this->model = $category;
	}

		public function getAll(){
		return $this->model->all();
	}
}