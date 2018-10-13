<?php

use Illuminate\Database\Seeder;
use App\Model\Restaurant;
use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::truncate();

        Admin::all()->each(function ($admin)
        {
            $admin->restaurants()->saveMany(factory(Restaurant::class, 4)->make());
        });
    }
}
