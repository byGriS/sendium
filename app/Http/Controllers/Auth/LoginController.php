<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Auth\LoginRequest;
use App\User;

class LoginController extends Controller{

	use AuthenticatesUsers;

	protected $redirectTo = '/';

	public function __construct(){
		$this->middleware('guest')->except('logout');
	}

	public function login(LoginRequest $request){
		if ($this->hasTooManyLoginAttempts($request)) {
			$this->fireLockoutEvent($request);
			return $this->sendLockoutResponse($request);
		}
		$this->incrementLoginAttempts($request);


		$credentials= [
			'email' => $request['email'],
			'password'  => $request['password'],
		];
		//$this->validateLogin($request);
		if (!auth()->validate($credentials)) {
			return redirect('login')
			->withErrors(['email' => 'Неверный логин или пароль'])
			->withInput($request->only('email'));
		}
		
		$user = auth()->getLastAttempted();
		
		if ($user->confirmed) {
			auth()->login($user, true);
			return redirect('/');
		}else{
			return redirect('login')
			->withInput($request->only('email'))
			->with('error', 'Пользователь не подтвержден. Перейдите по ссылке, отправленной Вам на почту для подтверждения пользователя');
		}
		

		return $this->sendFailedLoginResponse($request);
	}
}
