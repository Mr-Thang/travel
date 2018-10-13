<?php

use Illuminate\Database\Seeder;
use App\Model\Info;
use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	Info::truncate();

        Admin::all()->each(function ($admin)
        {
            $admin->infos()->saveMany(factory(Info::class, 4)->make());
        });
    }
}
