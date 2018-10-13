<?php

use Illuminate\Database\Seeder;
use App\Model\Comment;
use App\Model\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        $posts = Post::all();
        
        User::all()->each(function ($user)
        {
            $user->comments()->saveMany(factory(Comment::class, 3)->make());
        });
    }
}
