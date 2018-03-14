<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Payment;
use App\User;
use App\UserContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

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
    	$myHostels = Payment::where('user_id', auth()->user()->id)->with('user', 'hostel')->get();
    	$images = [];

    	foreach ($myHostels as $hostel){
    		$hostelID = $hostel->hostel->id;

		    $images[] = Hostel::find($hostelID)->images->first();
	    }
        return view('home', [
        	'myHostels' => $myHostels,
	        'images' => $images
        ]);
    }

	/**
	 * Show the checkout page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function getCheckout(){
    	return view('user.checkout');
    }

	/**
	 * Here a user books a hostel
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function getHostelToBook($id){
		$hostel = Hostel::where('id', $id)->with('images')->first();

		return view('user.checkout', [
			'hostel' => $hostel
		]);
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
		$this->validate($request, [
			'currentPassword' => 'required|min:6',
			'newPassword' => 'required|min:6',
			'confirmPassword' => 'required|min:6',
		]);

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

	/**
	 * Process the payment
	 * @param Request $request
	 * @return string
	 */
	public function postCheckout(Request $request){

		try{
			Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

			$customer  = Customer::create([
				'email' => $request->stripeEmail,
				'source' => $request->stripeToken
			]);

			$charge =  Charge::create([
				'customer' => $customer->id,
				'amount' => $request->amount,
				'currency' => env('STRIPE_CURRENCY')
			]);

			// Variables used for reference
			$stripeID = $charge->id;
			$amount = ($charge->amount) / 100;
			$userID = auth()->user()->id;
			$hostelID = $request->hostelID;

			// Log the payment info
			Log::useDailyFiles(storage_path().'/logs/payment.log');
			Log::info([auth()->user()->email => [
				'ip' => $request->ip(),
				'stripeID' => $stripeID,
				'amount' => $amount,
				'userID' => $userID,
				'hostelID' => $hostelID
			]]);

			// Add data to the payments table
			Payment::create([
				'stripeID' => $charge->id,
				'amount' => $amount,
				'user_id' => $userID,
				'hostel_id' => $hostelID
			]);

			// Increment the count of booked units
			$this->bookedIncrement($hostelID);

			alert()->success('Hostel successfully booked.', 'Booking Complete')->persistent('Got It');

			return redirect()->route('home');

		} catch (\Exception $exception){
			Log::useDailyFiles(storage_path().'/logs/payment-error.log');
			Log::error([auth()->user()->email => [
				'ip' => $request->ip(),
				'message' => $exception->getMessage()
			]]);
			return $exception->getMessage();
		}
	}

	/**
	 * Increment the count of booked units
	 * @param $id
	 * @return null
	 */
	public function bookedIncrement($id){
		// Find the hostel by id
		$hostel = Hostel::find($id);

		$hostel->bookedUnits = $hostel->bookedUnits + 1;

		$hostel->update();

		return null;
	}

	/**
	 * View booked hostel
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function viewBookedHostel($id)
	{
		// Find the hostel by id
		$hostel = Hostel::where('id', $id)->with('images', 'rooms')->first();

		return view('user.view', [
			'hostel' => $hostel
		]);
	}
}
