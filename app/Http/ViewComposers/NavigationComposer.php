<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Models\Navigation;

class NavigationComposer{
	public function compose(View $view){
		$view->with('navigation', Navigation::all())->with('currentRoute', explode('/',Route::current()->uri)[0]);
	}
}