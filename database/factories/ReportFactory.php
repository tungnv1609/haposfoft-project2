<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'note' => $faker->paragraph(5),
        'delete_at' => now(),
        ];
});
