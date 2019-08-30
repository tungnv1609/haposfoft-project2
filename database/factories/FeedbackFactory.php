<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'content' =>$faker->text(100),
        'deleted_at' => now(),
    ];
});
