<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
      Schema::create('tbl_products', function(Blueprint $table) {
          $table->increments('id');
          $table->integer('parent_id')->nullable; // ie can be empty
          $table->integer('user_id');
          $table->integer('category_id')->nullable; // ie can be empty
          $table->string('product_name');
          $table->string('cond');
          $table->integer('price');
          $table->string('product_description');
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
       Schema::drop('tbl_products');
    }
}
