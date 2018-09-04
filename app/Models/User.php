<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
	use Notifiable;

	protected $fillable = [
		'name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	public function articles(){
		return $this->hasMany('App\Models\Article');
	}

	public function projects(){
		return $this->belongsToMany('App\Models\Project');
	}
}
