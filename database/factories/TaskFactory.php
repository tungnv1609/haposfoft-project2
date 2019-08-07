<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,20),
        'content' => $faker->paragraph(5),
        'time' => $faker->time(),
        'delete_at' => now(),
    ];
});
