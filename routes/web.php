<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('confirm/{token}', 'Auth\RegisterController@confirm');

Route::get('/template/{id}',['as'=>'template', 'uses'=>'TemplateController@index'])->where('id','[0-9]+');


Route::get('/',['as'=>'main','uses'=>'MainController@index']);

Route::middleware(['auth'])->group(function(){
	Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);

	Route::resource('article','ArticleController');

	Route::resource('task','TaskController');

	Route::resource('project','ProjectController');

	Route::resource('contact','ContactController');

	Route::resource('category','CategoryController');

	Route::match(['get','post'],'setting',['as'=>'setting','uses'=>'SettingController@index']);
});
