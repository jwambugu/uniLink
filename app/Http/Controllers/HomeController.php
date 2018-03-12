<?php

namespace App\Http\Controllers;

use App\User;
use App\UserContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

	/**
	 * Show the password change page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getPassword(){
		return view('user.password');
	}

	/**
	 * Here we update the password
	 * @param Request $request
	 * @return Request
	 */
	public function updatePassword(Request $request){
		// Validate the request
//		$this->validate($request, [
//			'currentPassword' => 'required|min:6',
//			'newPassword' => 'required|min:6',
//			'confirmPassword' => 'required|min:6',
//		]);

		// Check if current password matches the sent password
		if(!Hash::check($request['currentPassword'], auth()->user()->password)){
			alert()->error('Your current password does not match with the password you provided. Please try again.', 'Passwords Mismatch')->autoclose(3000);

			return redirect()->back();
		}

		// Check if new password matches current
		if(strcmp($request['currentPassword'], $request['newPassword']) == 0){
			alert()->error('New password cannot be same as your current password. Please choose a different password.', 'Passwords Match')->autoclose(3000);

			return redirect()->back();
		}

		if(strcmp($request['newPassword'], $request['confirmPassword']) != 0){
			alert()->error('Sorry. The new password and the confirmation don\'t match. Please try again.', 'Passwords Mismatch')->autoclose(3000);

			return redirect()->back();
		}

		$user  =auth()->user();
		$user->password = $request['newPassword'];

		alert()->success('The password has been successfully  updated.', 'Passwords Changed')->autoclose(3000);

		return redirect()->route('home');

	}
}
