<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FlightTicket extends Model
{
	protected $fillable = [
		'name',
		'flight',
		'start',
		'end',
		'fare',
		'admin_id',
		'status',
	];

	public function admin()
	{
		return $this->belongsTo('App\Model\Admin');
	}
}
