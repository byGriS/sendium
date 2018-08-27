<?php

namespace App\Repository;

use Illuminate\Support\Facades\Auth;

use App\Repository\BaseRepository;
use App\Models\Article;
use App\Models\Category;

class ArticleRepository extends BaseRepository{

	protected $category;

	public function __construct(Article $article = null, Category $category = null){
		$this->model = $article;
		$this->category = $category;
	}

	public function add($article, $input, $user_id = null){
		$article->title = $input['title'];
		$text = explode('<hr />', $input['text']);
		if (count($text) < 2){
			$article->preview = "";
		}else{
			$article->preview = $text[0];
		}
		$article->text = $input['text'];
		$article->category_id = $this->category->whereTitle($input['category'])->first()->id;
		if ($user_id == null){
			$article->owner_id = Auth::user()->id;
		}else{
			$article->owner_id = $user_id;
		}
		$article->save();
	}

	public function getAll($paginate){
		return $this->model->where('owner_id',Auth::user()->id)->orderBy('created_at','desc')->paginate($paginate);
	}

	public function search($search, $paginate){
		return $this->model->where('owner_id',Auth::user()->id)->where('preview','like','%'.$search.'%')
			->orWhere('text','like','%'.$search.'%')
			->orWhere('title','like','%'.$search.'%')
			->orderBy('created_at','desc')
			->paginate($paginate);
	}

	public function getByCategory($category, $paginate){
		return $this->model->where('owner_id',Auth::user()->id)->where('category_id','=',$category->id)->orderBy('created_at','desc')->paginate($paginate);
	}

	public function update($article, $input){
		$this->add($article, $input);
	}

	public function uploadImage($file){
		$filename = md5_file($file->getRealPath());
		$file->move(public_path().'/'.Auth::user()->id.'/articles/', $filename);
		$url = "/".Auth::user()->id."/articles/" . $filename;
		return response('{"uploaded": 1,"fileName": "'.$filename.'","url": "'.$url.'"}');
	}

	public function resetCategory(Category $category){
		Article::whereCategoryId($category->id)->update(['category_id' => 1]);
	}
}