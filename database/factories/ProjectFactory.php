<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Project;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Project::class, function (Faker $faker) {
    return [
        'customer_id' => App\Customer::all()->random()->id,
        'name' => $faker->name,
        'detail' => $faker->paragraph(10),
        'create_by' => $faker->name,
        'update_by' => $faker->name,
        'delete_by' => $faker->name,
        'delete_at' => now(),
    ];
});
