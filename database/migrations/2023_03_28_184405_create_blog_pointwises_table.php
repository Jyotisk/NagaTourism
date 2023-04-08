<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPointwisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_pointwises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('blog_id')->unsigned();
            // $table->foreign('blog_id')->references('id')->on('blogs');
            // $table->foreign('blog_id');
            $table->string('point_name');
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
        Schema::dropIfExists('blog_pointwises');
    }
}
