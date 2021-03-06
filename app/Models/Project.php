<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{
	public function users(){
		return $this->belongsToMany('App\Models\User');
	}	

	public function tasks()	{
		return $this->hasMany('App\Models\Task');
	}
}
