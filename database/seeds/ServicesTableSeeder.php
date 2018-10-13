<?php

use Illuminate\Database\Seeder;
use App\Model\Service;
use App\Model\Hotel;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();
 
        Hotel::all()->each(function ($hotel)
        {
            $hotel->services()->saveMany(factory(Service::class, 4)->make());
        });
    }
}
