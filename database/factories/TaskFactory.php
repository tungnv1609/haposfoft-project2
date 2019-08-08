<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'content' => $faker->paragraph(5),
        'time' => $faker->time(),
        'delete_at' => now(),
    ];
});
