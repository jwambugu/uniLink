<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'image'
	];
	
	/**
	 * Here we have the images relationship with a hostel
	*/
	public function hostelImage(){
		$this->belongsTo('App\Hostel');
	}
}
