<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\NavigationComposer;

class ComposerProvider extends ServiceProvider{
	/**
	* Bootstrap services.
	*
	* @return void
	*/
	public function boot(){
		view()->composer('layouts.navigation', NavigationComposer::class);
	}

	/**
	* Register services.
	*
	* @return void
	*/
	public function register(){
	
	}
}
