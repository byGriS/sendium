<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('preview')->nullable();
            $table->text('text')->nullable();
            $table->unsignedInteger('category_id');
            
            $table->unsignedInteger('owner_id');
            
            $table->timestamps();
        });

        Schema::table('articles', function($table) {
           $table->foreign('category_id')->references('id')->on('categories');
           $table->foreign('owner_id')->references('id')->on('users');
       });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
