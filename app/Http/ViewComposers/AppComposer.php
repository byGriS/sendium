<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class AppComposer{
	public function compose(View $view){
		$view->with('user',Auth::user());
	}
}