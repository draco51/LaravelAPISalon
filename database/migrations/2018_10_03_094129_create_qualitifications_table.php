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
            $table->increments('id');
            $table->string('qualification');
            $table->timestamps();

            $table->unsignedInteger('Fid')->index();;
            $table->foreign('Fid')->references('id')->on('freelancer_profiles')->onDelete('cascade');
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
