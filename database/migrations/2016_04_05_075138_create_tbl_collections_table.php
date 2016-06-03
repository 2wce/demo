<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
        {
          Schema::create('tbl_collections', function(Blueprint $table) {
              $table->increments('id');
              $table->integer('parent_id')->nullable; // ie can be empty
              $table->integer('user_id');

              $table->string('title');

              $table->string('description');

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
           Schema::drop('tbl_collections');
        }
}
