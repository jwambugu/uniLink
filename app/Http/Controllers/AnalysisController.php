<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\User;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth:admin');
	}
	
	/**
	 * Get the count of all users in the system
	 * @return int
	 */
	public static function getUsersCount(){
		$users = count(User::all());
		
		return $users;
	}
	
	/**
	 * Get the count of all booked units
	 * @return int
	 */
	public static function getBookedUnitsCount(){

		$bookedUnits = Hostel::all()->sum('bookedUnits');

		return $bookedUnits;
		
	}

    /**
     *  Get the count of all total units
     * @return int
     */
	public static function getTotalUnitsCount(){

		$totalRooms =  Hostel::all()->sum('totalRooms');

		return $totalRooms;
		
	}
	
	/**
	 * Get the most popular hostels
	 * @return array
	 */
	public static function mostPopularHostels(){
		$hostels = Hostel::orderBy('bookedUnits', 'DESC')->take(4)->get();
		
		return $hostels;
	}

    /**
     * Fetch all hostels, sort by the most popular
     * @return array
     */
	public static function manageHostels(){
	    $hostels = Hostel::orderBy('created_at', 'DESC')->paginate(10);

	    return $hostels;
    }
}
