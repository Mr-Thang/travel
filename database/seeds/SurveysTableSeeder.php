<?php

use Illuminate\Database\Seeder;
use App\Model\Survey;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Survey::truncate();
        
        factory(Survey::class, 3)->create();
    }
}
