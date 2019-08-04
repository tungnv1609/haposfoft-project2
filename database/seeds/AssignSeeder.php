<?php

use Illuminate\Database\Seeder;

class AssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('assigns')->insert([
            	['employee_id'=>'7','project_id'=>'9','start_date'=>'2019-1-1 7:00:00','end_date'=>'2020-1-17:00:00'],
            	['employee_id'=>'7','project_id'=>'10','start_date'=>'2020-1-1 7:00:00','end_date'=>'2020-5-1 7:00:00'],
            	['employee_id'=>'7','project_id'=>'11','start_date'=>'2020-5-1 7:00:00','end_date'=>'2020-12-1 7:00:00'],
            	['employee_id'=>'7','project_id'=>'12','start_date'=>'2020-12-1 7:00:00','end_date'=>'2022-1-1 7:00:00'],
            	['employee_id'=>'8','project_id'=>'13','start_date'=>'2019-1-1 7:00:00','end_date'=>'2020-1-1 7:00:00'],
            ]);
    }
}
