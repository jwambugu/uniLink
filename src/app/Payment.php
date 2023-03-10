<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'stripeID', 'amount', 'user_id', 'hostel_id'
	];

	/**
	 * Here we define the relationship between this model
	 * & the user model
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(){
		return $this->belongsTo('App\User');
	}

	/**
	 * Here we define the relationship between this model
	 * & the hostel model
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function hostel(){
		return $this->belongsTo('App\Hostel');
	}
}
