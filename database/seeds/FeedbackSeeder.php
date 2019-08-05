<?php

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert([
            ['customer_id'=>'1','content'=>'comment1','delete_at'=>'2019-2-3 3:00:00','created_at'=>'2019-2-3 3:00:00','updated_at'=>'2019-2-3 3:00:00'],
            ['customer_id'=>'1','content'=>'comment2','delete_at'=>'2019-2-3 3:00:00','created_at'=>'2019-2-3 3:00:00','updated_at'=>'2019-2-3 3:00:00'],
            ['customer_id'=>'2','content'=>'comment3','delete_at'=>'2019-2-3 3:00:00','created_at'=>'2019-2-3 3:00:00','updated_at'=>'2019-2-3 3:00:00'],
            ['customer_id'=>'3','content'=>'comment4','delete_at'=>'2019-2-3 3:00:00','created_at'=>'2019-2-3 3:00:00','updated_at'=>'2019-2-3 3:00:00'],

        ]);
    }
}
