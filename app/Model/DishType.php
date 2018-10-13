<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DishType extends Model
{
	protected $fillable = [
		'name',
		'restaurant_id',
	];

	public function restaurant()
	{
		return $this->belongsTo('App\Model\Restaurant');
	}
}
