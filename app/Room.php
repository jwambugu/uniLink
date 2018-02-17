<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'hostel_id', 'roomType', 'roomCategory', 'electricityBill', 'waterBill'
	];
	
	/**
	 * Here we have the rooms relationship with a hostel
	 */
	public function hostelRooms(){
		$this->belongsTo('App\Hostel');
	}
}
