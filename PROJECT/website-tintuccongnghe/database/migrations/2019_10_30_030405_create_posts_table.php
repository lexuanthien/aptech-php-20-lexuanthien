<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->longText('content');
            $table->unsignedInteger('category_id')->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('tin_hot');
            $table->mediumText('image')->nullable();
            $table->string('slug')->unique();
            $table->integer('likes')->default(0)->comment("số lượt yêu thích");
            $table->integer('views')->default(0)->comment("số lượt xem");
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
