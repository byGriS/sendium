<?php 

namespace App\Repository;

use Illuminate\Support\Facades\Auth;
use App\Repository\BaseRepository;
use App\Models\Category;
use App\Repository\ArticleRepository;

class CategoryRepository extends BaseRepository{
	public function __construct(Category $category){
		$this->model = $category;
	}

	public function getAll(){
		return $this->model->where('owner_id',Auth::user()->id)->orderBy('title')->get();
	}

	/*public function getAllnFirst(){
		return $this->model->where('owner_id',Auth::user()->id)->where('id','<>', 1)->get();
	}*/

	public function add(Category $category, $title){
		$category->owner_id = Auth::user()->id;
		$category->title = $title;
		$category->save();
	}

	public function update(Category $category, $title){
		$this->add($category, $title);
	}
	public function destroy($id){ 
		$articleRep = new ArticleRepository();
		$articleRep->resetCategory(parent::getById($id));
		parent::destroy($id);
		//$this->getById($id)->delete();
	}

}