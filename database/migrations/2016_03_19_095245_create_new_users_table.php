<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        // create a new table
        Schema::create('tbl_users', function(Blueprint $table) {
            $table->increments('id');

            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('location')->nullable();
            $table->string('password_temp')->nullable();
            $table->string('activation_code')->nullable();
            $table->string('profilePic')->nullable();
            $table->string('isActive')->nullable();
            
            $table->string('remember_token')->nullable();
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
        // delete the table 
        Schema::drop('users');
    }
}
