<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
	protected $fillable = [
		'name',
		'description',
		'number_people',
		'total_room',
		'price',
		'hotel_id',
	];

	public function hotel()
	{
		return $this->belongsTo('App\Model\Hotel');
	}
}
