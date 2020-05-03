<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('receipt_number');
            $table->integer('origin');
            $table->integer('destination');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('courier_id')->unsigned();
            $table->integer('price')->default(0);
            $table->dateTime('shipment_date')->nullable();
            $table->dateTime('receive_date')->nullable();
        });

        Schema::table('shipments', function ($table) { 
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('courier_id')->references('id')->on('couriers');
            $table->foreign('origin')->references('city_id')->on('postal_codes');
            $table->foreign('destination')->references('city_id')->on('postal_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
