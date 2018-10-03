<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualitificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualitifications', function (Blueprint $table) {
            $table->increments('qualificationId');
            $table->string('qualification');

            $table->unsignedInteger('Fid');
            $table->foreign('Fid')->references('freelancerId')->on('freelancer_profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualitifications');
    }
}
