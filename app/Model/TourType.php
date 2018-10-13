<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TourType extends Model
{
	protected $fillable = [
		'type',
		'price',
		'content',
		'tour_id',
	];

	public function tour()
	{
		return $this->belongsTo('App\Model\Tour');
	}
}
