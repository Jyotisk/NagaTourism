<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id');
            // $table->foreign('event_id')->references('id')->on('event_details')->onDelete('cascade');
            // $table->foreign('event_id');
            $table->string('event_image');
            $table->boolean('status')->default(TRUE);
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
        Schema::dropIfExists('event_image');
    }
}
