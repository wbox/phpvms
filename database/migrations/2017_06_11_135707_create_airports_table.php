<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icao', 5)->unique();
            $table->string('name');
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->float('lat', 7, 4)->default(0.0);
            $table->float('lon', 7, 4)->default(0.0);
            $table->timestamps();

            $table->index('icao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('airports');
    }
}
