<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Assigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->timestamps();
//            $table
//                ->foreign('user_id')
//                ->references('id')
//                ->on('users')
//                ->onDelete('cascade');
//            $table
//                ->foreign('project_id')
//                ->references('id')
//                ->on('projects')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigns');
    }
}
