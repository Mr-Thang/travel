<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'comment',
		'user_id',
		'post_id',
	];

	public function user()
	 {
	 	return $this->belongsTo('App\Model\User');
	 } 

	 public function post()
	 {
	 	return $this->belongsTo('App\Model\Post');
	 }
}
