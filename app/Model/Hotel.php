<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	use Sluggable, SluggableScopeHelpers;

	protected $fillable = [
		'name',
		'description',
		'adress',
		'phone',
		'star',
		'admin_id',
		'status',
	];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function admin()
    {
    	return $this->belongsTo('App\Model\Admin');
    }

    public function services()
    {
    	return $this->hasMany('App\Model\Service');
    }

    public function roomTypes()
    {
        return $this->hasMany('App\Model\RoomType');
    }

    public function evaluates()
    {
        return $this->morphMany('App\Model\Evaluate', 'evaluateable');
    }

    public function images()
    {
        return $this->morphMany('App\Model\Image', 'imageable');
    }
}
