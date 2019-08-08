<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->string('name', 50);
            $table->text('detail');
            $table->string('create_by', 50);
            $table->string('update_by', 50);
            $table->string('delete_by', 50);
            $table->datetime('delete_at');
            $table->timestamps();
//             $table
//                 ->foreign('customer_id')
//                 ->references('id')
//                 ->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
