<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password',
		'position'
	];

	public function infos()
	{
		return $this->hasMany('App\Model\Info');
	}
}
