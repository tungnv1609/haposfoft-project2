<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('reports')->insert([
            	['employee_id'=>'7','note'=>'Bao cao hang ngay...','delete_at'=>'2019-10-2 12:3:34','created_at'=>'2019-10-2 12:3:34','updated_at'=>'2019-10-2 12:3:34'],
            	['employee_id'=>'7','note'=>'Bao cao hang ngay...','delete_at'=>'2019-10-2 12:3:34','created_at'=>'2019-10-2 12:3:34','updated_at'=>'2019-10-2 12:3:34'],
            	['employee_id'=>'7','note'=>'Bao cao hang ngay...','delete_at'=>'2019-10-2 12:3:34','created_at'=>'2019-10-2 12:3:34','updated_at'=>'2019-10-2 12:3:34'],
            	['employee_id'=>'7','note'=>'Bao cao hang ngay...','delete_at'=>'2019-10-2 12:3:34','created_at'=>'2019-10-2 12:3:34','updated_at'=>'2019-10-2 12:3:34'],
            	['employee_id'=>'8','note'=>'Bao cao hang ngay...','delete_at'=>'2019-10-2 12:3:34','created_at'=>'2019-10-2 12:3:34','updated_at'=>'2019-10-2 12:3:34'],
            	['employee_id'=>'8','note'=>'Bao cao hang ngay...','delete_at'=>'2019-10-2 12:3:34','created_at'=>'2019-10-2 12:3:34','updated_at'=>'2019-10-2 12:3:34']
            ]);
    }
}
