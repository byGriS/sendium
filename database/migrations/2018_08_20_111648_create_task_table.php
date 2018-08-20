<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration{
	public function up(){
		Schema::create('tasks', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->text('text')->nullable();
			$table->unsignedInteger('owner_id');
      $table->foreign('owner_id')->references('id')->on('users');
      $table->unsignedInteger('status');
      $table->unsignedInteger('priority');
      $table->timestamps();
		});
	}

	public function down(){
		Schema::table('Tasks', function (Blueprint $table) {
		});
	}
}
