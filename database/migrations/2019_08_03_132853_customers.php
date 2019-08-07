<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('phone')->unique();
            $table->string('email', 50)->unique();
            $table->string('address', 100);
            $table->string('password', 100);
            $table->string('created_by', 50);
            $table->string('updated_by',50);
            $table->string('deleted_by', 50);
            $table->rememberToken();
            $table->datetime('delete_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
