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
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function hostel(){
		return $this->belongsTo('App\Hostel');
	}
}
