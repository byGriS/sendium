<?php

use Illuminate\Database\Seeder;

class NavigationTableSeeder extends Seeder{
	public function run(){
  	DB::table('navigation')->insert([
  		'title' => 'Главная',
  		'route' => 'dashboard'
  	]);
  	DB::table('navigation')->insert([
  		'title' => 'Статьи',
  		'route' => 'article.index'
  	]);
  	DB::table('navigation')->insert([
  		'title' => 'Задачи',
  		'route' => 'task.index'
  	]);
  	DB::table('navigation')->insert([
  		'title' => 'Проекты',
  		'route' => 'project.index'
  	]);
  	DB::table('navigation')->insert([
  		'title' => 'splitter',
  		'route' => ''
  	]);
  	DB::table('navigation')->insert([
  		'title' => 'Контакты',
  		'route' => 'contact.index'
  	]);
  	DB::table('navigation')->insert([
  		'title' => 'Категории',
  		'route' => 'category.index'
  	]);
  	DB::table('navigation')->insert([
  		'title' => 'Настройки',
  		'route' => 'setting'
  	]);
  }
}
