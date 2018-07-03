<?php

namespace App\Repository;

use App\Repository\BaseRepository;
use App\Models\Article;
use App\Models\Category;

class ArticleRepository extends BaseRepository{

	protected $category;

	public function __construct(Article $article, Category $category){
		$this->model = $article;
		$this->category = $category;
	}

	public function save($article, $inputs, $user_id = null){

	}

	public function getAll($paginate){
		return $this->model->all();
	}

	public function search($serach, $paginate){

	}

	public function getByCategory($category){

	}




}