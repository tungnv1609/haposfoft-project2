<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProjectUser;
use Faker\Generator as Faker;

$factory->define(ProjectUser::class, function (Faker $faker) {
    return [

        'project_id' => App\Project::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'start_date' => now(),
        'end_date' => now(),
    ];
});
