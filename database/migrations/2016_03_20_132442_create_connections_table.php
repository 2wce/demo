<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        //
        Schema::create('tbl_connections', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id');
            $table->integer('connection_id');
            $table->boolean('accepted');
            
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
        Schema::drop('friends');
    }
}
