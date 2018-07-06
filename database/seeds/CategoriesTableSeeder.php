<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder{
    public function run(){
    	DB::table('categories')->insert([
    		'title' => 'Общая'
    	]);
    	DB::table('categories')->insert([
    		'title' => 'Категория 1'
    	]);
    	DB::table('categories')->insert([
    		'title' => 'Категория 2'
    	]);
    	DB::table('categories')->insert([
    		'title' => 'Категория 3'
    	]);
    }
  }
