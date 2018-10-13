<?php

use Illuminate\Database\Seeder;
use App\Model\DishType;
use App\Model\Restaurant;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class DishTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DishType::truncate();

        Restaurant::all()->each(function ($restaurant)
        {
            $restaurant->dishtypes()->saveMany(factory(DishType::class, 4)->make());

        });
    }
}
