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

Route::get('/',['as'=>'main','uses'=>'MainController@index']);

Route::post('/uploadFileCKEditor',['as'=>'upload','uses'=>'ArticleController@uploadImage']);

Route::middleware(['auth'])->group(function(){
	Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);

	Route::resource('article','ArticleController');
	Route::get('/articles/filter',['as'=>'articleFilter', 'uses'=>'ArticleController@filter']);
	Route::get('/articles/search',['as'=>'articleSearch', 'uses'=>'ArticleController@search']);

	Route::resource('task','TaskController');

	Route::resource('project','ProjectController');

	Route::resource('contact','ContactController');

	Route::resource('category','CategoryController');

	Route::match(['get','post'],'setting',['as'=>'setting','uses'=>'SettingController@index']);
});
