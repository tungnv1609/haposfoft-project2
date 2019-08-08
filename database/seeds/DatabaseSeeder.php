<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
            FeedbackSeeder::class,
            CustomerSeeder::class,
            RoleSeeder::class,
            ReportSeeder::class,
            TaskSeeder::class,
            ProjectUser::class,
            RoleSeeder::class
        ]);
        //        $this->call(App\User::class);
//        $this->call(\App\Project::class);
//        $this->call(\App\Role::class);
//        $this->call(\App\Feedback::class);
//        $this->call(\App\Report::class);
//        $this->call(\App\Task::class);
//        $this->call(\App\ProjectUser::class);
//        $this->call(\App\RoleUser::class);
    }
}