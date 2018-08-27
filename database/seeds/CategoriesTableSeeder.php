<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder{
    public function run(){
    	DB::table('categories')->insert([
    		'title' => 'Общая',
            'owner_id' => 1
    	]);
    	DB::table('categories')->insert([
    		'title' => 'Категория 1',
            'owner_id' => 1
    	]);
    	DB::table('categories')->insert([
    		'title' => 'Категория 2',
            'owner_id' => 1
    	]);
    	DB::table('categories')->insert([
    		'title' => 'Категория 3',
            'owner_id' => 1
    	]);
    }
  }
