<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Auth\RegisterRequest;
use App\Notifications\ConfirmEmail;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller{
	use RegistersUsers;

	protected $redirectTo = '/';

	public function __construct(){
		$this->middleware('guest');
	}

	public function register(RegisterRequest $request){
		$user = new User;
		$user->password = bcrypt($request['password']);
		$user->confirmation_code = str_random(30);
		$user->name = $request['name'];
		$user->email = $request['email'];
		$user->save();

		$user->notify(new ConfirmEmail());
		return redirect('/')->with('ok', 'На почту отправлено письмо. Для завершение регистрации пройдите по ссылке в письме');
	}

	// protected function validator(array $data){
	// 	return Validator::make($data, [
	// 		'name' => 'required|string|max:255',
	// 		'email' => 'required|string|email|max:255|unique:users',
	// 		'password' => 'required|string|min:6|confirmed',
	// 	]);
	// }

	public function confirm($confirmation_code)
	{
		$user = User::whereConfirmationCode($confirmation_code)->firstOrFail();
		$user->confirmed = true;
		$user->confirmation_code = null;
		$user->save();
		Auth::login($user, true);
		return redirect('/');
	}


	// protected function create(array $data){
	// 	return User::create([
	// 		'name' => $data['name'],
	// 		'email' => $data['email'],
	// 		'password' => Hash::make($data['password']),
	// 	]);
	// }
}
