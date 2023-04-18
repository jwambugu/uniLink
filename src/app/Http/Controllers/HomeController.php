<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Notif;
use App\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;
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
        $this->middleware('auth', [
        	'except' => [
        		'bookHostel', 'getBook', 'sortByAmountASC', 'sortByAmountDESC', 'getHostels'
	        ]
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    	$myHostels = Payment::where('user_id', auth()->user()->id)->with('user', 'hostel')->paginate(2);
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
	 * Show all the hostels available for booking
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
	 * Show the hostels available for booking
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function bookHostel(){
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

	/**
	 * Sort hostels by price ASC
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function sortByAmountASC(){
		// Fetch all hostels order by the price asc
		$hostels = Hostel::orderBy('price', 'asc')->with('images', 'rooms')->paginate(9);

		//return $hostels;
		return view('user.hostels', [
			'hostels' => $hostels
		]);
	}

	/**
	 * Sort hostels by price DESC
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function sortByAmountDESC(){
		// Fetch all hostels order by the price asc
		$hostels = Hostel::orderBy('price', 'desc')->with('images', 'rooms')->paginate(9);

		//return $hostels;
		return view('user.hostels', [
			'hostels' => $hostels
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

		// Create a new notification
		$this->createNotif('Password Changed', 'You have successfully changed your password. Please use your new password for the next login.');

		return redirect()->route('home');
	}

	/**
	 * Process the payment
	 * @param Request $request
	 * @return string
	 */
	public function postCheckout(Request $request){

        $hostel = Hostel::query()->findOrFail($request->id);

        Payment::create([
            'stripeID' => Uuid::uuid4(),
            'amount' => $request->amount,
            'user_id' => auth()->id(),
            'hostel_id' => $hostel->id
        ]);

        // Increment the count of booked units
        $this->bookedIncrement($hostel->id);

        alert()
            ->success('Hostel successfully booked. Check your email for a receipt.', 'Booking Complete')
            ->persistent('Got It');

        return redirect()->route('home');


        // TODO: update stripe package
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
//			Log::useDailyFiles(storage_path().'/logs/payment.log');
			Log::info((string)[auth()->user()->email => [
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

			alert()->success('Hostel successfully booked. Check your email for a receipt.', 'Booking Complete')->persistent('Got It');

			// Send an email to the user
			$this->sendInvoiceEmail($hostelID, $stripeID);

			return redirect()->route('home');

		} catch (\Exception $exception){
//			Log::useDailyFiles(storage_path().'/logs/payment-error.log');
			Log::error([auth()->user()->email => [
				'ip' => $request->ip(),
				'message' => $exception->getMessage()
			]]);

			alert()->error('Hostel booking unsuccessful. Please ensure you have a stable Internet connection ', 'Booking Incomplete')->persistent('Got It');

			return redirect()->back();
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

		// Create a new notification
		$message = "You have successfully booked $hostel->name. The hostel rent is $hostel->price. Kindly check your email we have sent an receipt. Kindly contact the hostel owner with $hostel->contact to verify the payment and also to book a room.";

		$this->createNotif('New Hostel Booked',$message);

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

	/**
	 * Send an email to the user as an invoice
	 * @param $hostel
	 * @param $stripeID
	 */
	public function sendInvoiceEmail($hostel, $stripeID){
		$hostel = Hostel::find($hostel);

		$hostelName = $hostel->name;
		$price = $hostel->price;

		$mail = app()->make(\Snowfire\Beautymail\Beautymail::class);
		$mail->send('emails.invoice', [
			'name' => auth()->user()->name,
			'hostel' => $hostelName,
			'price' => $price,
			'stripeID' => $stripeID
		], function($message)
		{
			$message
				->from(env('APP_EMAIL'))
				->to(auth()->user()->email, auth()->user()->name)
				->subject('Booking Invoice');
		});
	}

	/**
	 * Show the notifs page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getNotifs(){
		$notifs = Notif::where('user_id', auth()->user()->id)
			->where('status', 0)
			->orderBy('updated_at', 'desc')
			->paginate(3);

		return view('user.notifs', [
			'notifs' => $notifs
		]);
	}

	/**
	 * Mark the notif as read
	 * @param Request $request
	 * @return Request
	 */
	public function markNotifAsRead(Request $request){
		$notif = Notif::find($request->id);

		$notif->status = 1;
		$notif->update();

		return redirect()->back();
	}

	/**
	 * Create in app notifications
	 * @param $title
	 * @param $message
	 * @return null
	 */
	public function createNotif($title, $message){
		Notif::create([
			'title' => $title,
			'message' => $message,
			'user_id' => auth()->user()->id,
			'status' => 0
		]);

		return null;
	}

}
