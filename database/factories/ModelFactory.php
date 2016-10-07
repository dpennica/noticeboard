<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\Models\Notice::class, function (Faker\Generator $faker) {
    //$faker = Faker::create('it_IT');
    return [
        'user_id' => 1,
        'title' => $faker->sentence,
        'description' => $faker->text,
        'status' => $faker->boolean
    ];
});
