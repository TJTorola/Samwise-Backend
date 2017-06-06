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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Offer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'type' => 'auto',
        'type_info' => [
            'sI' => $faker->boolean,
            'sII' => $faker->boolean,
            'sIIA' => $faker->boolean,
            'l_sIIA' => $faker->boolean,
            'sIIB' => $faker->boolean,
            'sIII' => $faker->boolean,
            'stage_one_v8' => $faker->boolean,
            'defender' => $faker->boolean,
            'range_rover' => $faker->boolean,
            'discovery' => $faker->boolean,
            'other_applications' => '',
            'base_80' => $faker->boolean,
            'base_86' => $faker->boolean,
            'base_88' => $faker->boolean,
            'base_107' => $faker->boolean,
            'base_109' => $faker->boolean,
        ],
        'public' => $faker->boolean(95),
        'description' => $faker->text($faker->biasedNumberBetween(200, 2000)),
        'long_description' => '',
        'tags' => '',
    ];
});
