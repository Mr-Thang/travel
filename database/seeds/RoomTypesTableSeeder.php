<?php

use Illuminate\Database\Seeder;
use App\Model\RoomType;
use App\Model\Hotel;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomType::truncate();
 
        Hotel::all()->each(function ($hotel)
        {
            $hotel->roomtypes()->saveMany(factory(RoomType::class, 4)->make());
        });
    }
}
