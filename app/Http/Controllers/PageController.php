<?php

namespace App\Http\Controllers;

use Alert;
use App\Admin;
use App\Contact;
use App\ContactOwner;
use App\Hostel;
use App\Room;
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
	 * @return \Illuminate\Http\RedirectResponse
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
	 * The basic search for hostels
	 * @param Request $request
	 * @return Request
	 */
	public function basicSearch(Request $request){
		$search = $request['search'];

		$hostels = Hostel::where('ownerID', 'like', '%'.$search.'%')
			->orWhere('name', 'like', '%'.$search.'%')
			->orWhere('description', 'like', '%'.$search.'%')
			->orWhere('totalRooms', 'like', '%'.$search.'%')
			->orWhere('price', 'like', '%'.$search.'%')
			->orWhere('contact', 'like', '%'.$search.'%')
			->orWhere('price', 'like', '%'.$search.'%')
			->with('images')
			->paginate(6);

		return view('user.basicSearch', [
			'hostels' => $hostels
		]);
	}

	/**
	 * The advanced search for hostels
	 * @param Request $request
	 * @return Request
	 */
	public function advancedSearch(Request $request){

		//return $request;
		// TODO fix the advanced search
		// Find the requested hostel
		$hostels = Hostel::where('price', 'like', '%'.$request['price'].'%')
			->orWhere('deposit', 'like', '%'.$request['deposit'].'%')
			->with([
				'rooms' => function($query){
					$query->where('roomType', 'like', '%'.\request('roomType').'%');
				}
			])
			->paginate(6);

		return view('user.basicSearch', [
			'hostels' => $hostels
		]);
		/*return $rooms = Room::where('roomType', 'like', '%'.$request['roomType'].'%')
			->where('roomCategory', 'like', '%'.$request['roomCategory'].'%')
			->where('electricityBill', 'like', '%'.$request['electricityBill'].'%')
			->where('waterBill', 'like', '%'.$request['waterBill'].'%')
			->get();*/
	}

	/**
	 * Send a message to the hostel owner
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function contactOwner(Request $request){

		// Store the data to the db
		ContactOwner::create([
			'ownerID' => $request['ownerID'],
			'email' => $request['email'],
			'phoneNumber' => $request['phoneNumber'],
			'message' => $request['message'],
		]);

		alert()->success('Message Successfully Sent', 'Action Complete');

		return redirect('/');
	}

	/**
	 * Post contact us form
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postContactUs(Request $request){
		// Store the data
		Contact::create([
			'name' => $request['name'],
			'email' => $request['email'],
			'subject' => $request['subject'],
			'phoneNumber' => $request['phoneNumber'],
			'message' => $request['message'],
		]);

		alert()->success('Message Successfully Sent', 'Action Complete');

		return redirect()->back();
	}

}

