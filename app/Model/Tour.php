<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
	use Sluggable, SluggableScopeHelpers;

	protected $fillable = [
		'name',
        'image',
		'content',
		'highlights',
		'vehicle',
		'schedule',
		'departure_schedule',
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

    public function tourTypes()
    {
    	return $this->hasMany('App\Model\TourType');
    }
}
