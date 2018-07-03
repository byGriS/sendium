<?php

use Illuminate\Database\Seeder;

class NavigationsTableSeeder extends Seeder{
	public function run(){
  	DB::table('navigations')->insert([
  		'title' => 'Главная',
  		'route' => 'dashboard'
  	]);
  	DB::table('navigations')->insert([
  		'title' => 'Статьи',
  		'route' => 'article.index'
  	]);
  	DB::table('navigations')->insert([
  		'title' => 'Задачи',
  		'route' => 'task.index'
  	]);
  	DB::table('navigations')->insert([
  		'title' => 'Проекты',
  		'route' => 'project.index'
  	]);
  	DB::table('navigations')->insert([
  		'title' => 'splitter',
  		'route' => ''
  	]);
  	DB::table('navigations')->insert([
  		'title' => 'Контакты',
  		'route' => 'contact.index'
  	]);
  	DB::table('navigations')->insert([
  		'title' => 'Категории',
  		'route' => 'category.index'
  	]);
  	DB::table('navigations')->insert([
  		'title' => 'Настройки',
  		'route' => 'setting'
  	]);
  }
}
