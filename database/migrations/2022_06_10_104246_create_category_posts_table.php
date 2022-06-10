<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');

            /**
             * When Delete each Category , Deleted each record
             */

            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');



            $table->unsignedBigInteger('posts_id');

            /**
             * When Delete each Post , Deleted each record
             */

            $table->foreign('posts_id')->references('id')->on('posts')->onDelete('cascade');

            $table->unique(['category_id','posts_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_posts');
    }
}
