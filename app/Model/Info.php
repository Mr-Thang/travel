<?php

use Cviebrock\EloquentSluggable\Sluggable;
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
	use Sluggable;

	protected $fillable = [
		'title',
		'content',
		'admin_id',
	];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
	public function admin()
	{
		return $this->belongsTo('App\Model\Admin');
	}
}
