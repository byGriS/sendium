<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration{
	public function up(){
		Schema::create('projects', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->text('description')->nullable();
			$table->date('deadline')->nullable();
			$table->unsignedInteger('status');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::dropIfExists('projects');
	}
}
