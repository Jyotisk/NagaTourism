<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('blog_title');
            $table->text('blog_sub_title')->nullable();
            $table->string('blog_creator_name');
            $table->string('blog_tag')->nullable();
            $table->text('blog_description');
            $table->text('blog_banner')->comment('Path of the images');
            $table->bigInteger('blog_category_id')->unsigned();
            $table->bigInteger('blog_type_id')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('blog_active_status')->default(1);
            // $table->foreign('blog_category_id')->references('id')->on('blog_categories');
            // $table->foreign('blog_type_id')->references('id')->on('blog_types');
            // $table->foreign('blog_category_id');
            // $table->foreign('blog_type_id');
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
        Schema::dropIfExists('blogs');
    }
}
