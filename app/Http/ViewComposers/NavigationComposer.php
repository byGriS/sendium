<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Navigation;

class NavigationComposer{
	public function compose(View $view){
		$view->with('navigation', Navigation::all());
	}
}