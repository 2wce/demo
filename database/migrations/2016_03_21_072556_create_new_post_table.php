<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        //
        Schema::create('tbl_posts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            $table->integer('user_id');
            $table->integer('parent_id')->nullable; // ie can be empty
            $table->text('body');
            $table->text('post_image')->nullable;
            $table->integer('type_id');
            $table->integer('service_id');
            $table->integer('collection_id');
            $table->integer('product_id'  );

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
        //
        Schema::drop('tbl_posts');
    }
}
