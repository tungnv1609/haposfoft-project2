<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'department_id' => App\Department::all()->random()->id,
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'address' => $faker->address,
        'password' => Hash::make(str_random(8)),
        'avatar' => Str::random(10),
        'level' => $faker->numberBetween(0,1),
        'created_by' => $faker->name,
        'updated_by' => $faker->name,
        'delete_by' => $faker->name,
        'remember_token' => Str::random(10),
        'delete_at' => now(),
    ];
});
