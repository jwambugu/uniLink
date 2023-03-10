<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactOwner extends Model
{
    // Mass fillable fields
	protected $fillable = [
		'ownerID', 'email', 'phoneNumber', 'message'
	];
}
