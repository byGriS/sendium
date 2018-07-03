<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{
  public function run(){
  	DB::table('users')->insert([
  		'name'=>'GriS',
  		'email' => 'x55sr@mail.ru',
  		'password' => '$2y$10$0hiBl4x4OD/cCrrTxKVr8u42ZodPRg/qFIzV9Ik3nVIjmEz84ipMm',
  		'confirmed' => 1
  	]);  
  }
}
