<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id', 'phoneNumber', 'creditCard'
	];

	// Define the relationship to the user
	public function user(){
		return $this->belongsTo('App\User');
	}
}
