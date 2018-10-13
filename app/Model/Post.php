<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
	use Sluggable, SluggableScopeHelpers;

	protected $fillable = [
		'title',
		'content',
		'admin_id',
		'tag_id',
		'status'
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

    public function tag()
    {
    	return $this->belongsTo('App\Model\Tag');
    }
=======
    // 
>>>>>>> 795da521c6be34106ee4474357a4db5290eb732e
}
