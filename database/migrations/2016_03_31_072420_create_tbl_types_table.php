<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
        {
          Schema::create('tbl_types', function(Blueprint $table) {
              $table->increments('id');
              $table->string('name');
              $table->string('icon');
              $table->string('slug');
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
              Schema::drop('tbl_types');
        }
}
