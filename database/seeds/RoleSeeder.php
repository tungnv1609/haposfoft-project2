<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
            ['name' => 'admin','note' => 'La admin cua he thong.'],
            ['name' => 'customer','note' => 'La khach hang cua cong ty.'],
            ['name' => 'employee','note' => 'La nhan vien cua cong ty.'],
        ]);
    }

}
