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
    
    /**
     * Here we have hostel relationship with the images
    */
    public function images(){
    	return $this->hasMany('App\Image');
    }
	
	/**
	 * Here we have hostel relationship with the rooms
	 */
	public function rooms(){
		return $this->hasMany('App\Room');
	}
}
