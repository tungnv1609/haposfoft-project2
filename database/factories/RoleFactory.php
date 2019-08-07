<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'note' => $faker-> paragraph(5),
        'create_by' => $faker->name,
        'update_by' => $faker->name,
        'delete_by' => $faker->name,
        'delete_at' => now(),
    ];
});
