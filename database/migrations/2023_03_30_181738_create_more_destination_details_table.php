<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoreDestinationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('more_destination_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('destination_detail_id');
            // $table->foreign('destination_detail_id')->references('id')->on('destination_details')->onDelete('cascade');
            // $table->foreign('destination_detail_id');
            $table->string('image',1000);
            $table->string('image_by')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('more_destination_details');
    }
}
