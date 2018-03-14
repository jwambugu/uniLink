<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','regNo', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
	 * Here we define the relationship between this model
	 * & the contact model
	 */
	public function contact(){
		return $this->hasOne('App\UserContact');
	}

	/**
	 * Here we define the relationship between this model
	 * & the hostel model
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function hostel(){
		return $this->hasOne('App\Hostel');
	}

	/**
	 * Here we define the relationship between this model
	 * & the payment model
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function payment(){
		return $this->belongsTo('App\Payment');
	}
}
