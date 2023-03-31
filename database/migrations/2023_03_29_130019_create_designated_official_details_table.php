<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignatedOfficialDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designated_official_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->bigInteger('contact_no');
            $table->bigInteger('alt_contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('alt_email')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('status');
            $table->bigInteger('official_type')->comment('1 for designated_official and 2 for police official');
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
        Schema::dropIfExists('designated_official_details');
    }
}
