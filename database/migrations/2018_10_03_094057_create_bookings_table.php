<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('description');
            $table->boolean('bookingStatus'); // Freelancer confirmed or not
            $table->integer('totalCost');
            $table->smallInteger('tax'); // % value

            $table->unsignedInteger('Fid');
            $table->foreign('Fid')->references('id')->on('freelancer_profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
