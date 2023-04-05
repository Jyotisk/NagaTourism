<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_queries', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->boolean('status',TRUE);
            $table->integer('reply_status',0);
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
        Schema::dropIfExists('user_queries');
    }
}
