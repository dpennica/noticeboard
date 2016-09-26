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

// $this->app->singleton(\Faker\Generator::class, function () {
//     return \Faker\Factory::create('it_IT');
// });

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//     ];
// });
$factory->define(App\Models\Notice::class, function (Faker\Generator $faker) {
    //$faker = Faker::create('it_IT');
    return [
        'user_id' => 1,
        'title' => $faker->sentence,
        'description' => $faker->text,
        'status' => $faker->boolean
    ];
});
