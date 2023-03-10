<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('stripeID');
	        $table->integer('amount');
	        $table->integer('user_id')->unsigned();
	        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
	        $table->integer('hostel_id')->unsigned();
	        $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
