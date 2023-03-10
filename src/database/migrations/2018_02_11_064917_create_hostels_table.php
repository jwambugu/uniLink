<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ownerID')->unique();
            $table->string('name');
            $table->text('description');
            $table->integer('totalRooms')->default(0);
            $table->double('latitude');
            $table->double('longitude');
            $table->double('price')->default(0);
            $table->string('contact');
            $table->double('deposit')->default(0);
            $table->string('account');
            $table->integer('bookedUnits')->default(0);
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
        Schema::dropIfExists('hostels');
    }
}
