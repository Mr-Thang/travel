<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable = [
		'name',
		'hotel_id',
	];

	public function hotel()
	{
		return $this->belongsTo('App\Model\Hotel');
	}
}
