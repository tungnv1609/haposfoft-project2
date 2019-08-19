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
            RoleUserSeeder::class,
            DepartmentSeeder::class
        ]);
    }
}