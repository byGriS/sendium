<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request{
	public function rules(){
		return [
			'name' => 'bail|required|max:30',
			'email' => 'bail|required|email|max:255|unique:users',
			'password' => 'bail|required|min:6|confirmed',
		];
	}
}
