<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
	protected $fillable = [
		'full_name',
		'email',
		'phone',
		'address',
		'service',
		'fear_likes',
		'question',
	];
}
