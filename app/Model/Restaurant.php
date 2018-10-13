<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	use Sluggable, SluggableScopeHelpers;

	protected $fillable = [
		'name',
		'address',
		'phone',
		'description',
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

    public function dishTypes()
    {
    	return $this->hasMany('App\Model\DishType');
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
