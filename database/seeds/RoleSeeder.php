<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	['note'=>'admin','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4','created_at'=>'2019-8-4','updated_at'=>'2019-8-4'],
        	['note'=>'employee','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4','created_at'=>'2019-8-4','updated_at'=>'2019-8-4'],
        	['note'=>'manager','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4','created_at'=>'2019-8-4','updated_at'=>'2019-8-4']
        ]);
    }
}
