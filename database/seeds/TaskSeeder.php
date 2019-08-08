<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TaskSeeder extends Seeder
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
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = App\Report::all();
        factory(App\Task::class, 30)->create()
            ->each(function ($tasks) use ($reports) {
                $tasks->reports()->attach(
                    $reports->random()->id,
                    ['note' => $this->faker->text]);
            });
    }
}
