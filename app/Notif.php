<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    // Mass fillable fields
	protected $fillable = [
		'title', 'message', 'user_id'
	];
}
