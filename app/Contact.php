<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	// Mass fillable fields
	protected $fillable = [
		'name', 'email', 'subject', 'phoneNumber', 'message'
	];
}
