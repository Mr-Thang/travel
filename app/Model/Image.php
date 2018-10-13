<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $fillable = [
		'link_url',
		'imageable_id',
		'imageable_type',
	];

	public function imageable()
	{
		return $this->morphTo();
	}
}
