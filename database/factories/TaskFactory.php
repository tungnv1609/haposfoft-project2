<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'project_id' => App\Project::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'content' => $faker->paragraph(5),
        'time' => $faker->time(),
        'delete_at' => now(),
    ];
});
