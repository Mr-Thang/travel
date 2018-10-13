<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password',
		'position',
		'status',
	];

	public function infos()
	{
		return $this->hasMany('App\Model\Info');
	}

	public function tags()
	{
		return $this->hasMany('App\Model\Tag');
	}

	public function posts()
	{
		return $this->hasMany('App\Model\Post');
	}

	public function hotels()
	{
		return $this->hasMany('App\Model\Hotel');
	}

	public function flightTickets()
	{
		return $this->hasMany('App\Model\FlightTicket');
	}

	public function tours()
	{
		return $this->hasMany('App\Model\Tour');
	}

	public function restaurants()
	{
		return $this->hasMany('App\Model\Restaurant');
	}
}
