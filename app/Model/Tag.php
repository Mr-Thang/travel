<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
<<<<<<< HEAD
	use Sluggable, SluggableScopeHelpers;

	protected $fillable = [
		'title',
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

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }
=======
	// 
>>>>>>> 795da521c6be34106ee4474357a4db5290eb732e
}
