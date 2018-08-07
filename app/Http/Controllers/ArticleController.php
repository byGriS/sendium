<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Article\ArticleUploadRequest;

use Illuminate\Support\Facades\Input;

class ArticleController extends Controller{
	
	protected $articleModel;
	protected $categoryModel;

	public function __construct(ArticleRepository $articles, CategoryRepository $categories){
		$this->articleModel = $articles;
		$this->categoryModel = $categories;
	}

	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(){
		$articles = $this->articleModel->getAll(config('app.pagination.article'));
		$articles->load('owner','category');
		$categories = $this->categoryModel->getAll();
		return view('articles.index',compact('articles', 'categories'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create(){
		$categories = $this->categoryModel->getAll();
		return view('articles.create', compact('categories'));
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request){
		$input = $request->all();
		$this->articleModel->add(new Article, $input, Auth::user()->id);
		return redirect('article');
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function show(Request $request, Article $article){
		$category = $article->category;
		return view('articles.show', compact('article','category'));
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit(Article $article){
		$categories = $this->categoryModel->getAll();
		return view('articles.edit', compact('article','categories'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Article $article){
		$this->articleModel->update($article, $request->all());
		return redirect('article');
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id){
		$this->articleModel->destroy($id);
		return redirect('article');
	}

	public function uploadImage(ArticleUploadRequest $request){
		return $this->articleModel->uploadImage($request->file('upload'));
	}

	public function filter2(Request $request, $title){
		dd($request);
		$category = Category::whereTitle($request->category)->first();
		if ($category == null){
			$articles = $this->articleModel->getAll(config('app.pagination.article'));
		}else{
			$articles = $this->articleModel->getByCategory($category, config('app.pagination.article'));
		}
		return view('articles.index',compact('articles'));
	}
}
