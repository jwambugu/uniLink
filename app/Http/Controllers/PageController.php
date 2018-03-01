<?php

namespace App\Http\Controllers;

use Alert;
use App\Admin;
use App\Hostel;
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
		
		if (!auth()->guard('admin')->attempt([
			'username' => $request['username'],
			'password' => $request['password']
		])){
			alert()->error('Sorry. These credentials do not match our records.', 'Wrong Credentials');
			
			return redirect()->back();
		}
		
		return redirect()->route('admin.home');
	}

	/**
	 * The index page for the application
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function userIndex(){
		$popularHostels = Hostel::orderBy('bookedUnits', 'DESC')->with('images')->take(3)->get();
		$recentHostels = Hostel::orderBy('created_at', 'DESC')->with('images')->take(4)->get();


		return view('welcome',[
			'popularHostels' => $popularHostels,
			'recentHostels' => $recentHostels,
		]);
	}
}

