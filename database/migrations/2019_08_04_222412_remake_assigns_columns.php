<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemakeAssignsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::table('assigns', function (Blueprint $table) {
        $table->renameColumn('user_id', 'employee_id');
    });
 }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('assigns', function (Blueprint $table) {
        $table->renameColumn('employee_id', 'user_id');
    });
   }
}
