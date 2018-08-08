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

	public function add(Category $category, $title){
		$category->title = $title;
		$category->save();
	}

	public function update(Category $category, $title){
		$this->add($category, $title);
	}

}