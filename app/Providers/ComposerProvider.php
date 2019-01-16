<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\AppComposer;
use App\Http\ViewComposers\NavigationComposer;
use App\Http\ViewComposers\CalendarComposer;

class ComposerProvider extends ServiceProvider{
	/**
	* Bootstrap services.
	*
	* @return void
	*/
	public function boot(){
		view()->composer('layouts.app', AppComposer::class);
		view()->composer('layouts.navigation', NavigationComposer::class);
		view()->composer('layouts.calendar', CalendarComposer::class);
	}

	/**
	* Register services.
	*
	* @return void
	*/
	public function register(){
	
	}
}
