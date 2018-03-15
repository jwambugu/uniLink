<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Payment;
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
		return $users = count(User::all());
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
		return $totalRooms =  Hostel::all()->sum('totalRooms');
	}
	
	/**
	 * Get the most popular hostels
	 * @return array
	 */
	public static function mostPopularHostels(){
		return $hostels = Hostel::orderBy('bookedUnits', 'DESC')->take(4)->get();
	}

    /**
     * Fetch all hostels, sort by the most popular
     * @return array
     */
	public static function manageHostels(){
	    return $hostels = Hostel::orderBy('created_at', 'DESC')->paginate(10);
    }

    /**
     * Get the user contact
    */
    public static function getContact(){
    	return User::find(auth()->user()->id)->contact;
    }

    /**
     * Get the total amount paid
    */
    public static function totalPaidAmount(){
	    return $payment = Payment::all();
    }
}
