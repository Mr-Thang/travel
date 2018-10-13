<?php

use Illuminate\Database\Seeder;
use App\Model\Tour;
use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Tour::truncate();
 
        Admin::all()->each(function ($admin)
        {
            $admin->tours()->saveMany(factory(Tour::class, 4)->make());
        });
    }
}
