<?php

namespace App\Http\Controllers;

use Alert;
use App\Hostel;
use App\Image;
use App\Payment;
use App\Room;
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
		// All the dashboard data
		$users = AnalysisController::getUsersCount();
		$bookedUnits = AnalysisController::getBookedUnitsCount();
		$totalRooms = AnalysisController::getTotalUnitsCount();
		$hostels = AnalysisController::mostPopularHostels();
		$totalPaidAmount = AnalysisController::totalPaidAmount();
		
		return view('admin.home',[
			'users' => $users,
			'bookedUnits' => $bookedUnits,
			'totalRooms' => $totalRooms,
			'hostels' => $hostels,
			'totalPaidAmount' => $totalPaidAmount
		]);
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
		
		// Create a new hostel and save to db
		$newHostel = Hostel::create([
			'name' => $request['name'],
			'ownerID' => $request['ownerID'],
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

		$hostelID = $newHostel->id;
		
		
		alert()->success('Hostel Successfully Added. Redirecting you to add the hostel rooms data.', 'Hostel Successfully Added')->persistent();
		
		return redirect()->route('admin.hostelData')->with('hostelID', $hostelID);
	}
	
	/**
	 * Show the view for adding hostel rooms
	 * and images
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getHostelData(){
		$hostelID = Session::get('hostelID');
		
		return view('admin.room')->with('hostelID', $hostelID);
	}
	
	/**
	 * Add the hostels rooms data and images to db
	 * Upload the images
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postHostelData(Request $request){
		//return $request;
		// Validate the request
		$this->validate($request, [
			'roomType' => 'required',
			'roomCategory' => 'required',
			'electricityBill' => 'required',
			'waterBill' => 'required',
			'images[]' => 'image|nullable|mimes:jpeg,bmp,png'
		]);
		
		// Extract the hostel_id
		$hostelID = $request['hostelID'];

		// Handle the image upload
		if(!$request->hasFile('images')){
			$fileNameToStore = 'no-image.jpg';

			// Insert into the images table
			Image::create([
				'hostel_id' => $hostelID,
				'image' => $fileNameToStore
			]);
		}

		foreach ($request->images as $image){
			$fileNameWithExt = $image->getClientOriginalName();
			$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
			$extension = $image->getClientOriginalExtension();

			$fileNameToStore = $filename.'_'.time().'.'.$extension;

			$image->storeAs('public/hostel_images', $fileNameToStore);

			// Insert into the images table
			Image::create([
				'hostel_id' => $hostelID,
				'image' => $fileNameToStore
			]);


		}

		//Insert into the rooms table
		Room::create([
			'hostel_id' => $hostelID,
			'roomType' => $request['roomType'],
			'roomCategory' => $request['roomCategory'],
			'electricityBill' => $request['electricityBill'],
			'waterBill' => $request['waterBill'],
		]);

		alert()->success('Hostel data successfully recorded.', 'Data Inserted');
		
		return redirect()->route('admin.home');
	}

    /**
     * Show the page for searching data to manage a hostel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function getManage(){
	    $hostels = AnalysisController::manageHostels();

		return view('admin.manage', [
		    'hostels' => $hostels
        ]);
	}

	/**
	 * Search a hostel from the db
	 * @param Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function postManage(Request $request){

		$hostel = Hostel::where('ownerID', $request['ownerID'])->with('images', 'rooms')->first();

		//return count($hostel);
		if(!$hostel){
			alert()->error('Sorry the hostel data was not found. Kindly check the ID then try again.', 'Invalid Hostel ID')->persistent('Got It');

			return redirect()->back();
		}

		return view('admin.hostelData',[
			'hostel' => $hostel
		]);
	}

	/**
	 * View hostel data from the dashboard
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function viewHostel($id){
		$hostel = Hostel::where('id', $id)->with('images', 'rooms')->first();

		return view('admin.hostelData',[
			'hostel' => $hostel
		]);
	}

	/**
	 * Edit a hostel data to be used in updating the records
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function editHostel($id){
		$hostel = Hostel::where('id', $id)->with('images', 'rooms')->first();

		return view('admin.edit',[
			'hostel' => $hostel
		]);
	}

	/**
	 * Update the hostel data
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updateHostel(Request $request){
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
			'roomType' => 'required',
			'roomCategory' => 'required',
			'electricityBill' => 'required',
			'waterBill' => 'required',
		]);

		// Find the hostel by ownerID
		$hostel = Hostel::where('ownerID', $request['ownerID'])->with('images', 'rooms')->first();

		// Update the hostels table data @param $hostel
		$hostel->name = $request['name'];
		$hostel->description = $request['description'];
		$hostel->totalRooms = $request['totalRooms'];
		$hostel->latitude = $request['latitude'];
		$hostel->longitude = $request['longitude'];
		$hostel->price = $request['price'];
		$hostel->deposit = $request['deposit'];
		$hostel->account = $request['account'];
		$hostel->bookedUnits = $request['bookedUnits'];

		// Save the update
		$hostel->update();

		// Update the rooms data
		foreach ($hostel->rooms as $room){
			$room->roomType = $request['roomType'];
			$room->roomCategory = $request['roomCategory'];
			$room->electricityBill = $request['electricityBill'];
			$room->waterBill = $request['waterBill'];

			$room->update();
		}

		alert()->success('Hostel data successfully updated.', 'Update Completed')->autoclose(3000);

		return redirect()->route('admin.manage');
	}
}
