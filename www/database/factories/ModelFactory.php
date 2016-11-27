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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'policy_id'      => $faker->numberBetween(1, 2),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Order::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->realText(80),
        'body'        => $faker->realText(200),
        'status'      => $faker->numberBetween(0, 1),
        'user_id'     => 21,
        'kind_id'     => $faker->numberBetween(1, 2),
        'type_id'     => $faker->numberBetween(1, 5),
    ];
});
