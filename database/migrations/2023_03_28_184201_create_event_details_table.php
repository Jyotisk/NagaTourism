<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_details', function (Blueprint $table) {
            $table->id();
            $table->string('event_title');
            $table->date('event_date');
            $table->string('event_image_main');
            $table->text('event_description');
            $table->bigInteger('insert_by');
            $table->boolean('wheather_active')->default(TRUE);
            $table->timestamps();
            $table->bigInteger('status');
            $table->bigInteger('add_image_status');
            $table->bigInteger('add_activity_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_details');
    }
}
