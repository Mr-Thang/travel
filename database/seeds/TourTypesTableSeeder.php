<?php

use Illuminate\Database\Seeder;
use App\Model\TourType;
use App\Model\Tour;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class TourTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourType::truncate();
 
        Tour::all()->each(function ($tour)
        {
            $tour->tourtypes()->saveMany(factory(TourType::class, 4)->make());
        });
    }
}
