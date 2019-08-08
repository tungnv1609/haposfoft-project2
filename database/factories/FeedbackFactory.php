<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    return [
        'customer_id' => App\Customer::all()->random()->id,
        'content' =>$faker->text(100),
        'delete_at' => now(),
    ];
});
