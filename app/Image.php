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
		'hostel_id', 'image'
	];

	/**
	 * Here we have the images relationship with a hostel
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function hostel(){
		return $this->belongsTo('App\Hostel');
	}
}
