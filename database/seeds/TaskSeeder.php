<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('tasks')->insert([
            	['employee_id'=>'7','content'=>'Noi dung cong viec ngay 2/4/2019..','time'=>'8:0:0','delete_at'=>'2019-2-3 3:5:6','created_at'=>'2019-2-3 3:5:6','updated_at'=>'2019-2-3 3:5:6'],
            	['employee_id'=>'7','content'=>'Noi dung cong viec ngay 2/4/2019..','time'=>'8:0:0','delete_at'=>'2019-2-3 3:5:6','created_at'=>'2019-2-3 3:5:6','updated_at'=>'2019-2-3 3:5:6'],
            	['employee_id'=>'7','content'=>'Noi dung cong viec ngay 2/4/2019..','time'=>'8:0:0','delete_at'=>'2019-2-3 3:5:6','created_at'=>'2019-2-3 3:5:6','updated_at'=>'2019-2-3 3:5:6'],
            	['employee_id'=>'8','content'=>'Noi dung cong viec ngay 2/4/2019..','time'=>'8:0:0','delete_at'=>'2019-2-3 3:5:6','created_at'=>'2019-2-3 3:5:6','updated_at'=>'2019-2-3 3:5:6'],
            	['employee_id'=>'8','content'=>'Noi dung cong viec ngay 2/4/2019..','time'=>'8:0:0','delete_at'=>'2019-2-3 3:5:6','created_at'=>'2019-2-3 3:5:6','updated_at'=>'2019-2-3 3:5:6']
            ]);
    }
}
