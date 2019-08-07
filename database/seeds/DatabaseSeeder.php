<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\App\User::class);
        $this->call(\App\Customer::class);
        $this->call(\App\Project::class);
        $this->call(\App\Role::class);
        $this->call(\App\Feedback::class);
        $this->call(\App\Report::class);
        $this->call(\App\Task::class);
    }


//class EmployeeSeeder extends Seeder
//{
//	public function run ()
//	{
//		DB::table('employees')->insert([
//			['name'=>'Nguyen Van Tung','phone'=>'012345789','email'=>'tanhtungfk99@gmail.com','address'=>'BacNinh','password'=>bcrypt('123'),'create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4 18:4:4','created_at'=>'2019-8-4 18:4:4','updated_at'=>'2019-8-4 18:4:4']
//		]);
//	}
//}
//
//
//class CustomerSeeder extends Seeder
//{
//	public function run ()
//	{
//		DB::table('customers')->insert([
//			['name'=>'Nguyen Van Tung','phone'=>'023456789','email'=>'thantungfk99@gmail.com','address'=>'BacNinh','password'=>bcrypt('123'),'create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4 18:4:4','created_at'=>'2019-8-4 18:4:4','updated_at'=>'2019-8-4 18:4:4'],
//			['name'=>'Nguyen Van Tung','phone'=>'013456789','email'=>'thatungfk99@gmail.com','address'=>'BacNinh','password'=>bcrypt('123'),'create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4 18:4:4','created_at'=>'2019-8-4 18:4:4','updated_at'=>'2019-8-4 18:4:4'],
//			['name'=>'Nguyen Van Tung','phone'=>'01245679','email'=>'thtungfk99@gmail.com','address'=>'BacNinh','password'=>bcrypt('123'),'create_by'=>'Nguyen Van Tung','update_by'=>'Nguyen Van Tung','delete_by'=>'Nguyen Van Tung','delete_at'=>'2019-8-4 18:4:4','created_at'=>'2019-8-4 18:4:4','updated_at'=>'2019-8-4 18:4:4']
//		]);
//	}
}