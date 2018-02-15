<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth:admin')->except('logout');
	}
	
	/**
	 * Show the admin dashboard
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(){
		return view('admin.home');
	}
	
	/**
	 * Logout the admin, redirect to login page
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function logout(){
		auth()->logout();
		Session::flush();
		
		return redirect()->route('admin.login');
	}
	
	/**
	 * Show the page for adding new hostels
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getAdd(){
		return view('admin.add');
	}
	
	/**
	 * Add an ew hostel to the database
	 * @param Request $request
	 */
	public function addHostel(Request $request){
		return $request;
	}
}
