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

// Array of countries
$country = ['IND', 'USA', 'UK', 'UAE'];

$factory->define(App\Models\User::class, function (Faker $faker) use ($country) {
    return [
        'first_name' => str_random(5),
        'last_name' => str_random(5),
        'email' => str_random(4) . '@gmail.com',
        'mobile_number' => rand(1111111111, 9999999999),
        'country' => array_random($country)
    ];
});
