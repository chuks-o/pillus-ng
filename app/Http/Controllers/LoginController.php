<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

	 public function login()
	 {
		 if (Auth::attempt(['email' => request('email'), 'password' => request('password')]))
		 {
			 $user = User::where('email', request('email'))->first();
			 if ($user->is_admin()) {
				 auth()->login($user);
				 return redirect('/admin001');
			 }
			 return redirect()->back();
		 }
		 return redirect()->back();
	 }

}
