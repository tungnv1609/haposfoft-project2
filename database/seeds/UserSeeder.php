<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Project;
use App\RoleUser;
use App\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    protected $faker;

    public function __construct(Faker $faker)
    {
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    }
}
