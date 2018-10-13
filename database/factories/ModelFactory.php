<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
//  User
$factory->define(App\Model\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('123123'), // secret
        'remember_token' => str_random(10),
    ];
});
// Admin
$factory->define(App\Model\Admin::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('123123'), // secret
        'position' => 'Admin', 
        'remember_token' => str_random(10),
    ];
});
// Tag
$factory->define(App\Model\Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
    ];
});
// Post
$factory->define(App\Model\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'content' => $faker->text(200),
        'tag_id' => $faker->randomElement(App\Model\Tag::pluck('id')->toArray()),
    ];
});
// Comment
$factory->define(App\Model\Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text(30),
        'post_id' => $faker->randomElement(App\Model\Post::pluck('id')->toArray()),
    ];
});
// FlightTicket
$factory->define(App\Model\FlightTicket::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'flight' => $faker->lastName,
        'start' => $faker->time( 'H:i:s', '15:00:00' ),
        'end' => $faker->time( 'H:i:s', '15:00:00' ),
        'fare' => rand(2, 8),
        'status' => rand(0, 1),
    ];
});
// hotel
$factory->define(App\Model\Hotel::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'description' => $faker->text(25),
        'address' => $faker->secondaryAddress,
        'phone' => $faker->tollFreePhoneNumber,
        'star' => rand(1, 5),
        'status' => rand(0, 1),
    ];
});
// service hotel
$factory->define(App\Model\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
// room_type
$factory->define(App\Model\RoomType::class, function (Faker $faker) {
    return [
        'name' => str_random(2) . ' ' . $faker->numberBetween(1, 500),
        'description' => $faker->text(30),
        'number_people' => rand(1, 4),
        'total_room' => rand(1, 20),
        'price' => numberBetween($min = 100, $max = 600),
    ];
});
// survey
$factory->define(App\Model\Survey::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'phone' => $faker->tollFreePhoneNumber,
        'address' => $faker->secondaryAddress,
        'service' => $faker->name,
        'fear_likes' => $faker->text(50),
        'question' => $faker->text(50),
        'email' => $faker->unique()->safeEmail, 
    ];
});
// info
$factory->define(App\Model\Info::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'content' => $faker->text(50),
    ];
});
// tour
$factory->define(App\Model\Tour::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->text(50),
        'highlights' => $faker->text(50),
        'vehicle' => $faker->text(10),
        'schedule' => $faker->text(10),
        'departure_schedule' => $faker->text(10),
    ];
});
// tour_type
$factory->define(App\Model\TourType::class, function (Faker $faker) {
    return [
        'type' => $faker->lastName,
        'content' => $faker->text(50),
        'price' => numberBetween($min = 100, $max = 600),
    ];
});
// restaurant
$factory->define(App\Model\Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName,
        'address' => $faker->secondaryAddress,
        'phone' => $faker->tollFreePhoneNumber,
        'description' => $faker->text(50),
    ];
});
// dish_type
$factory->define(App\Model\DishType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});


