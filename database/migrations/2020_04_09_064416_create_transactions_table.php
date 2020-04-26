<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {           
            $table->bigIncrements('id');
            $table->timestamp('date')->useCurrent();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('payment_id')->nullable()->unsigned();
            $table->bigInteger('shipment_id')->nullable()->unsigned();
            $table->string('status',15)->nullable();
        });

        Schema::table('transactions', function ($table) {             
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('shipment_id')->references('id')->on('shipments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
