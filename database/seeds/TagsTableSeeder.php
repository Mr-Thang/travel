<?php

use Illuminate\Database\Seeder;
use App\Model\Tag;
use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        
        Admin::all()->each(function ($admin)
        {
        	$admin->tags()->saveMany(factory(Tag::class, 4)->make());
        });
    }
}
