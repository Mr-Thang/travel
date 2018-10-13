<?php

use Illuminate\Database\Seeder;
use App\Model\Hotel;
use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::truncate();
 
        Admin::all()->each(function ($admin)
        {
            $admin->hotels()->saveMany(factory(Hotel::class, 4)->make());
        });
    }
}
