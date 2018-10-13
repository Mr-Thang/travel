<?php

use Illuminate\Database\Seeder;
use App\Model\Tag;
use App\Model\Post;
use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $tags = Tag::all();
        
        Admin::all()->each(function ($admin) use ($tags)
        {
        	$admin->posts()->attach(
                $tags->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
