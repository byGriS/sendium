<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller{
	public function index(){
		if (Auth::user() != null){
			return redirect(route('dashboard'));
		}else{
			return view('auth.login');
		}
		
	}
}
