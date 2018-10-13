<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
	protected $fillable = [
		'name',
		'email',
		'content',
		'evaluateable_id',
		'evaluateable_type',
	];

	public function evaluateable()
	{
		return $this->morphTo();
	}
}
