<?php

use Illuminate\Database\Seeder;

class AddDataIntoEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	['name'=>'Nguyen Van Tung','phone'=>'012345789','email'=>'tanhtungfk99@gmail.com','address'=>'BacNinh','password'=>bcrypt('123'),'create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4 18:4:4','created_at'=>'2019-8-4 18:4:4','updated_at'=>'2019-8-4 18:4:4'],
        	['name'=>'Nguyen Van QUan','phone'=>'0933002047','email'=>'quanocch@gmail.com','address'=>'BacNinh','password'=>bcrypt('123'),'create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4 18:4:4','created_at'=>'2019-8-4 18:4:4','updated_at'=>'2019-8-4 18:4:4']
        ]);
    }
}
