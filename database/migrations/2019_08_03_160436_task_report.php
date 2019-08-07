<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaskReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_report', function(Blueprint $table) {
            $table->integer('task_id')->unsigned();
            $table->integer('report_id')->unsigned();
            $table->text('note');
            $table->timestamps();
            $table->unique(['task_id','report_id']);
//            $table
//                ->foreign('task_id')
//                ->references('id')
//                ->on('tasks')
//                ->onDelete('cascade');
//            $table
//                ->foreign('report_id')
//                ->references('id')
//                ->on('reports')
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
        Schema::dropIfExists('task_report');
    }
}
