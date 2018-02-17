<?php

namespace App\Http\Controllers;

use Alert;
use App\Hostel;
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
	 * Add a new hostel to the database
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function addHostel(Request $request){
		// Validate the request
		$this->validate($request, [
			'name' => 'required',
			'description' => 'required',
			'totalRooms' => 'required|numeric',
			'latitude' => 'required|numeric',
			'longitude' => 'required|numeric',
			'price' => 'required|numeric',
			'contact' => 'required|numeric',
			'deposit' => 'required|numeric',
			'account' => 'required|numeric',
			'bookedUnits' => 'required|numeric',
		]);
		
		// Create a new hostel
		$newHostel = new Hostel([
			'name' => $request['name'],
			'description' => $request['description'],
			'totalRooms' => $request['totalRooms'],
			'latitude' => $request['latitude'],
			'longitude' => $request['longitude'],
			'price' => $request['price'],
			'contact' => $request['contact'],
			'deposit' => $request['deposit'],
			'account' => $request['account'],
			'bookedUnits' => $request['bookedUnits'],
		]);
		
		// Save the data to the db
		$newHostel->save();
		
		alert()->success('Hostel Successfully Added. Redirecting you to add the hostel rooms data.', 'Successfully Added')->persistent();
		
		return redirect()->back();
	}
}
