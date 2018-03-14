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

	/**
	 * Here we define the relationship between this model
	 * & the user model
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(){
		return $this->belongsTo('App\User');
	}
}
