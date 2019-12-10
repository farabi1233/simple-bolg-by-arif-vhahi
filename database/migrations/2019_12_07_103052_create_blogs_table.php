<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('blog_title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->text('blog_description');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onDelete('cascade');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
        Schema::dropForeign('category_id');
    }
}
