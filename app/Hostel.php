<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
    	'name', 'description', 'totalRooms', 'latitude', 'longitude', 'price', 'contact', 'deposit', 'account', 'bookedUnits'
    ];
    
}
