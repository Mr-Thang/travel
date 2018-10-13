<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
	use Sluggable, SluggableScopeHelpers;

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
