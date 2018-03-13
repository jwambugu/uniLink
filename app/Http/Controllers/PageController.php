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
		// Check if credentials match
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
		// Fetch the recently added and most booked
		$popularHostels = Hostel::orderBy('bookedUnits', 'DESC')->with('images')->take(3)->get();
		$recentHostels = Hostel::orderBy('created_at', 'DESC')->with('images')->take(4)->get();

		return view('welcome',[
			'popularHostels' => $popularHostels,
			'recentHostels' => $recentHostels,
		]);
	}

	/**
	 * Show the FAQs page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getFaq(){
		return view('user.faq');
	}

	/**
	 * Show the contact page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getContact(){
		return view('user.contact');
	}

	/**
	 * Show the password reset page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getReset(){
		return view('auth.passwords.email');
	}

	/**
	 * Show all the hostels for booking
	 *
	 */
	public function getHostels(){
		// Fetch all hostels order by the most booked
		$hostels = Hostel::orderBy('bookedUnits', 'DESC')->with('images', 'rooms')->paginate(9);

		//return $hostels;
		return view('user.hostels', [
			'hostels' => $hostels
		]);
	}

	/**
	 * Show a hostel to be booked
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|Request|\Illuminate\View\View
	 */
	public function getBook($id){

		// Find the hostel by id
		$hostel = Hostel::where('id', $id)->with('images', 'rooms')->first();
		$recentHostels = Hostel::orderBy('created_at', 'DESC')->with('images')->take(3)->get();

		return view('user.book', [
			'hostel' => $hostel,
			'recentHostels' => $recentHostels
		]);
	}

}

