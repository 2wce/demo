<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
        {
          Schema::create('tbl_services', function(Blueprint $table) {
              $table->increments('id');
              $table->integer('parent_id')->nullable; // ie can be empty
              $table->integer('user_id');
              $table->integer('type_id')->nullable; // ie can be empty
              $table->string('name');
              $table->integer('charge');
              $table->string('description');
              $table->string('base_image');
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
           Schema::drop('tbl_services');
        }
}
