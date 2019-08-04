<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
        	['customer_id'=>'1','name'=>'Web','detail'=>'Thiet ke web ban sach cho cua hang NN','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Phan Bao Thai','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updated_at'=>'2019-3-2 3:3:20'],
        	['customer_id'=>'1','name'=>'Web','detail'=>'Thiet ke web ban hang','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Phan Bao Thai','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updated_at'=>'2019-3-2 3:3:20'],
        	['customer_id'=>'1','name'=>'App','detail'=>'Thiet ke App','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Phan Bao Thai','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updated_at'=>'2019-3-2 3:3:20'],
        	['customer_id'=>'1','name'=>'Web','detail'=>'Thiet ke web dien tu','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Phan Bao Thai','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updated_at'=>'2019-3-2 3:3:20'],
        	['customer_id'=>'2','name'=>'Web','detail'=>'Thiet ke web ban sach cho cua hang ACVA','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Phan Bao Thai','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updated_at'=>'2019-3-2 3:3:20'],
        	// ['customer_id'=>'1','name'=>'Web','detail'=>'Thiet ke web ban do the thao cho NN','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Thi Mai','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updated_at'=>'2019-3-2 3:3:20'],
        	// ['customer_id'=>'1','name'=>'App','detail'=>'Thiet ke app','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Hoang Thi Lan','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updated_at'=>'2019-3-2 3:3:20'],
        	// ['customer_id'=>'2','name'=>'Web','detail'=>'Thiet ke web','create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Dao Anh Quan','delete_at'=>'2019-3-2 3:3:20','created_at'=>'2019-3-2 3:3:20','updatd_at'=>'2019-3-2 3:3:20']
        ]);
    }
}
