<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoleUser;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        'role_id' => App\Role::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
    ];
});
