<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;


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
        $projects = App\Project::all();
        factory(App\User::class, 30)->create()
            ->each(function ($users) use ($projects) {
                $users->projects()->attach(
                    $projects->random()->id,
                    ['start_date' => $this->faker->dateTime(),'end_date' =>  $this->faker->dateTime()]);
            });
    }
}
