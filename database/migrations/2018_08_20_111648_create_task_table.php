<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration{
	public function up(){
		if (!Schema::hasTable('tasks')){
			Schema::create('tasks', function (Blueprint $table) {
				$table->increments('id');
				$table->string('title', 255);
				$table->text('text')->nullable();
				$table->date('deadline')->nullable();
				$table->unsignedInteger('owner_id');
			//$table->foreign('owner_id')->references('id')->on('users');
				$table->unsignedInteger('project_id')->nullable();
				$table->unsignedInteger('status');
				$table->unsignedInteger('priority');
				$table->timestamps();
			});


			Schema::table('tasks', function($table) {
				$table->foreign('owner_id')->references('id')->on('users');
				$table->foreign('project_id')->references('id')->on('projects');
			});
		}
	}

	public function down(){
		Schema::dropIfExists('tasks');
	}
}
