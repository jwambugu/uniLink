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
    	'ownerID', 'name', 'description', 'totalRooms', 'latitude', 'longitude', 'price', 'contact', 'deposit', 'account', 'bookedUnits'
    ];

	/**
	 * Here we have hostel relationship with the images
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function images(){
    	return $this->hasMany('App\Image');
    }

	/**
	 * Here we have hostel relationship with the rooms
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function rooms(){
		return $this->hasMany('App\Room');
	}

	/**
	 * Here we define the relationship between this model
	 * & the user model
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function payment(){
		return $this->belongsTo('App\Payment');
	}
}
