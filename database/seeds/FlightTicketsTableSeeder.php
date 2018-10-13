<?php

use Illuminate\Database\Seeder;
use App\Model\FlightTicket;
use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


class FlightTicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FlightTicket::truncate();
 
        Admin::all()->each(function ($admin)
        {
            $admin->flighttickets()->saveMany(factory(FlightTicket::class, 2)->make());
        });
    }
}
