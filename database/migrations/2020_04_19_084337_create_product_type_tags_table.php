<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypeTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_type_tags', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
        });

        Schema::table('product_type_tags', function ($table) {  
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('type_id')->references('id')->on('product_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_type_tags');
    }
}
