<?php

namespace App\Http\Controllers;

use App\User;
use App\UserContact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

	/**
	 * Here a user books a hostel
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function getHostelToBook($id){
		return $id;
		return redirect()->intended();
	}

	/**
	 * Show the profile page
	*/
	public function getProfile(){

		return view('user.profile', [
			'contact' => AnalysisController::getContact()
		]);
	}

	/**
	 * Update the user profile
	 * @param Request $request
	 * @return Request
	 */
	public function updateProfile(Request $request){
		// Validate the request
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'phoneNumber' => 'required|unique:user_contacts',
			'creditCard' => 'required',
		]);

		// Update the name and username
		$user = User::find(auth()->user()->id);

		$user->name = $request['name'];
		$user->email = $request['email'];

		$user->update();

		// Update contact data
		$contact = AnalysisController::getContact();

		$contact->phoneNumber = $request['phoneNumber'];
		$contact->creditCard = $request['creditCard'];

		$contact->update();

		alert()->success('Profile data successfully updated.', 'Update Complete')->autoclose(3000);

		return redirect()->route('home');
	}
}
