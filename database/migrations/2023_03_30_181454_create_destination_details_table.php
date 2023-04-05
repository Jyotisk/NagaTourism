<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_details', function (Blueprint $table) {
            $table->id();
            $table->string('header',1000);
            $table->date('blog_date');
            $table->string('blog_by')->nullable();
            $table->text('description')->nullable();
            $table->string('source_link',500)->nullable();
            $table->string('image',1000);
            $table->string('blog_categories_id',1000);
            $table->bigInteger('status');
            $table->bigInteger('add_more_status');
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
        Schema::dropIfExists('destination_details');
    }
}
