<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CategoryRepository;
use App\Models\Category;

class CategoryController extends Controller{
	protected $categoryModel;

	public function __construct(CategoryRepository $categories){
		$this->categoryModel = $categories;
	}

	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(){
		$categories = $this->categoryModel->getAll();
		return view('categories.index',compact('categories'));
	}

	/**
 	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request){
		$this->categoryModel->add(new Category, $request->title);
		return redirect('category');
	}

	/**
	* Update the specified resource in storage.
	*
 	* @param  \Illuminate\Http\Request  $request
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Category $category){
		$this->categoryModel->update($category, $request->title);
		return $category->title;
		//return view('categories.formCategory',compact('category'));
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id){
		$this->categoryModel->destroy($id);
		return redirect('category');
	}
}	