<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskUserTable extends Migration{
	public function up(){
		Schema::create('task_user', function (Blueprint $table) {
			$table->integer('task_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	public function down(){
		Schema::table('task_user', function (Blueprint $table) {

		});
	}
}
