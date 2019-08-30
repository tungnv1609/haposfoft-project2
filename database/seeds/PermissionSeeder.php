<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'user-list','note' => 'Danh sach user'],
            ['name' => 'user-show','note' => 'Xem user'],
            ['name' => 'user-add','note' => 'Them user'],
            ['name' => 'user-edit','note' => 'Sua user'],
            ['name' => 'user-delete','note' => 'Xoa user'],
            ['name' => 'department-list','note' => 'Danh sach department'],
            ['name' => 'department-add','note' => 'Them department'],
            ['name' => 'department-edit','note' => 'Sua department'],
            ['name' => 'department-delete','note' => 'Xoa department'],
            ['name' => 'project-list','note' => 'Danh sach project'],
            ['name' => 'project-add','note' => 'Them project'],
            ['name' => 'project-edit','note' => 'Sua project'],
            ['name' => 'project-delete','note' => 'Xoa project'],
            ['name' => 'customer-list','note' => 'Danh sach customer'],
            ['name' => 'customer-show','note' => 'Xem customer'],
            ['name' => 'customer-add','note' => 'Them customer'],
            ['name' => 'customer-edit','note' => 'Sua customer'],
            ['name' => 'customer-delete','note' => 'Xoa customer'],
            ['name' => 'report-list','note' => 'Danh sach report'],
            ['name' => 'report-add','note' => 'Them report'],
            ['name' => 'report-edit','note' => 'Sua report'],
            ['name' => 'report-delete','note' => 'Xoa report'],
            ['name' => 'task-list','note' => 'Danh sach task'],
            ['name' => 'task-add','note' => 'Them task'],
            ['name' => 'task-edit','note' => 'Sua task'],
            ['name' => 'task-delete','note' => 'Xoa task'],
            ['name' => 'feedback-list','note' => 'Danh sach feedback'],
            ['name' => 'feedback-delete','note' => 'Xoa feedback'],
            ['name' => 'role-list','note' => 'Danh sach role'],
            ['name' => 'role-add','note' => 'Them role'],
            ['name' => 'role-edit','note' => 'Sua role'],
            ['name' => 'role-delete','note' => 'Xoa role'],

        ]);
    }
}
