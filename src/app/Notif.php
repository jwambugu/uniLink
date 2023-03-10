<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    // Mass fillable fields
	protected $fillable = [
		'title', 'message', 'user_id', 'status'
	];

	/**
	 * Add the model relationship to the user model
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(){
		return $this->belongsTo('App\User');
	}
}
