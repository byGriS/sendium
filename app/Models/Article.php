<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
	public function category(){
		return $this->belongsTo('App\Models\Category');
	}

	public function owner(){
		return $this->belongsTo('App\Models\User');
	}
}
