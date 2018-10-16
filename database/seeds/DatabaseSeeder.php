<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	AdminsTableSeeder::class,
        	UsersTableSeeder::class,
            TagsTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            SurveysTableSeeder::class,
            
            // FlightTicketsTableSeeder::class,
            // RestaurantsTableSeeder::class,
            // DishTypesTableSeeder::class,
            InfosTableSeeder::class,

            // ToursTableSeeder::class,
            // TourTypesTableSeeder::class,

            // HotelsTableSeeder::class,
            // ServicesTableSeeder::class,
            // RoomTypesTableSeeder::class,
        ]);
    }
}
