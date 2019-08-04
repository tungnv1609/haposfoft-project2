<?php

use Illuminate\Database\Seeder;

class EmployeeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_role')->insert([
        	['employee_id'=>'7','role_id'=>'1','start_date'=>'2019-8-4 7:00:00','end_date'=>'2020-3-4 7:00:00'],
        	['employee_id'=>'7','role_id'=>'2','start_date'=>'2020-3-4 7:00:00','end_date'=>'2021-12-4 7:00:00'],
        	['employee_id'=>'8','role_id'=>'3','start_date'=>'2019-8-4 7:00:00','end_date'=>'2020-3-4 7:00:00'],
        ]);
    }
}
