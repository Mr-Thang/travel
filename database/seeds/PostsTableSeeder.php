<?php

use Illuminate\Database\Seeder;
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

        Admin::all()->each(function ($admin)
        {
            $admin->posts()->saveMany(factory(Post::class, 4)->make());
        });
    }
}
