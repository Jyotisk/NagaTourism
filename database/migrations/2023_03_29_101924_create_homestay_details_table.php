<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomestayDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestay_details', function (Blueprint $table) {
            $table->id();
            $table->string('homestay_name');
            $table->string('location');
            $table->bigInteger('contact_no');
            $table->bigInteger('alt_contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('alt_email')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('status');
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
        Schema::dropIfExists('homestay_details');
    }
}
