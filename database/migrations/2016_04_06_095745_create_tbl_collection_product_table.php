<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCollectionProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_collection_product', function(Blueprint $table) {
          $table->increments('id');
          $table->integer('collection_id'); // ie can be empty
          $table->integer('product_id');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::drop('tbl_collection_product');
    }
}
