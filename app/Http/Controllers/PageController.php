<?php

namespace App\Http\Controllers;

use Alert;
use App\Admin;
use Illuminate\Http\Request;

class PageController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}
	
	/**
	 * Show the admin login page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getLogin(){
		return view('admin.login');
	}
	
	/**
	 * Authenticate the admin
	 * @param Request $request
	 * @return Request
	 */
	public function postLogin(Request $request){
//		// Create a new admin
//		$admin = new Admin([
//			'username' => $request['username'],
//			'email' => 'test@example.com',
//			'password' => bcrypt($request['password']),
//		]);
//
//		$admin->save();
		
		if (!auth()->guard('admin')->attempt([
			'username' => $request['username'],
			'password' => $request['password']
		])){
			alert()->error('Sorry. These credentials do not match our records.', 'Wrong Credentials');
			
			return redirect()->back();
		}
		
		return redirect()->route('admin.home');
	}
}

