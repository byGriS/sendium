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

	public function add($article, $input, $user_id = null){
		$text = explode('<hr />', $input['text']);
		$article->title = $input['title'];
		$article->preview = $text[0];
		$article->text = $text[1];
		$article->category_id = $this->category->whereTitle($input['category'])->first()->id;
		$article->save();
	}

	public function getAll($paginate){
		return $this->model->all();
	}

	public function search($serach, $paginate){

	}

	public function getByCategory($category){

	}




}