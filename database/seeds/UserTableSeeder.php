<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->insert([
			'name'=>'GriS',
			'email' => 'x55sr@mail.ru',
			'password' => '$2y$10$0hiBl4x4OD/cCrrTxKVr8u42ZodPRg/qFIzV9Ik3nVIjmEz84ipMm',
			'confirmed' => 1
		]); 
		DB::table('users')->insert([
			'name'=>'test2',
			'email' => 'st56te1@mail.ru',
			'password' => '$2y$10$vlVAg0fUsrMOvQTDCHV0I.vrR06CTHRfcW6JJKwtxzz.UPi0MAdQe',
			'confirmed' => 1
		]); 
	}
}
