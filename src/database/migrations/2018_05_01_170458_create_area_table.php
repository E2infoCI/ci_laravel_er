<?php

use Illuminate\Database\Migrations\Migration;

class CreateAreaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefectures', function ($table) {
            $table->increments('id');
            $table->string('code')->index('code');
            $table->string('name');
            $table->integer('sort')->unsigned();
            $table->timestamps();
        });

        Schema::create('cities', function ($table) {
            $table->increments('id');
            $table->string('code')->index('code');
            $table->integer('prefecture_id')->unsigned()->index('prefecture_id');
            $table->string('name');
            $table->string('kana');
            $table->integer('sort')->unsigned();
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
        Schema::dropIfExists('prefectures');
        Schema::dropIfExists('cities');
    }

}
