<?php

use Illuminate\Database\Seeder;

class TaskReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_report')->insert([
            ['task_id'=>'1','report_id'=>'1','note'=>'Bao cao cho...'],
            ['task_id'=>'1','report_id'=>'2','note'=>'Bao cao cho...'],
            ['task_id'=>'1','report_id'=>'3','note'=>'Bao cao cho...'],
            ['task_id'=>'2','report_id'=>'4','note'=>'Bao cao cho...'],
            ['task_id'=>'2','report_id'=>'5','note'=>'Bao cao cho...'],
            ['task_id'=>'3','report_id'=>'6','note'=>'Bao cao cho...'],
            ['task_id'=>'3','report_id'=>'7','note'=>'Bao cao cho...'],
            ['task_id'=>'3','report_id'=>'8','note'=>'Bao cao cho...'],
            ['task_id'=>'4','report_id'=>'9','note'=>'Bao cao cho...'],
            ['task_id'=>'4','report_id'=>'10','note'=>'Bao cao cho...'],
            ['task_id'=>'4','report_id'=>'11','note'=>'Bao cao cho...'],
            ['task_id'=>'5','report_id'=>'12','note'=>'Bao cao cho...'],
        ]);
    }
}
