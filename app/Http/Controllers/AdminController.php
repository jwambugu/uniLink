<?php

namespace App\Http\Controllers;

use Alert;
use App\Hostel;
use App\Image;
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
		
		// Save the data to the db
		$newHostel->save();
		
		$hostelID = $newHostel->id;
		
		
		alert()->success('Hostel Successfully Added. Redirecting you to add the hostel rooms data.', 'Successfully Added')->persistent();
		
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
			'images[]' => 'image|nullable|mimes:jpeg,bmp,png|max:2000'
		]);
		
		// Extract the hostel_id
		$hostelID = $request['hostelID'];
		
		// Handle the image upload
		if($request->hasFile('images')){
			foreach ($request->images as $image){
				$fileNameWithExt = $image->getClientOriginalName();
				$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
				$extension = $image->getClientOriginalExtension();
				
				$fileNameToStore = $filename.'_'.time().'.'.$extension;
				
				$image->storeAs('public/hostel_images', $fileNameToStore);
				
			}
		} else{
			$fileNameToStore = 'no-image.jpg';
		}
		
		//Insert into the rooms table
		$newRoom = new Room([
			'hostel_id' => $hostelID,
			'roomType' => $request['roomType'],
			'roomCategory' => $request['roomCategory'],
			'electricityBill' => $request['electricityBill'],
			'waterBill' => $request['waterBill'],
		]);
		
		// Save to db
		$newRoom->save();
		
		
		// Insert into the images table
		$newImage = new Image([
			'hostel_id' => $hostelID,
			'image' => $fileNameToStore
		]);
		
		// Save to db
		$newImage->save();
		
		alert()->success('Hostel data successfully recorded.', 'Data Inserted');
		
		return redirect()->route('admin.home');
		
	}
}
