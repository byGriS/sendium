<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class LoginRequest extends Request{
	public function rules(){
		return [
			'email' => 'email|max:255|required', 
			'password' => 'required',
		];
	}
}
