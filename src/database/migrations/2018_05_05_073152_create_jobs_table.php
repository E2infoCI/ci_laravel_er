<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->unsigned()->index('status');
            $table->integer('client_id')->unsigned()->index('client_id');
            $table->integer('prefecture_id')->unsigned()->index('prefecture_id');
            $table->integer('city_id')->unsigned()->index('city_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('prefecture_id')->references('id')->on('prefectures');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
