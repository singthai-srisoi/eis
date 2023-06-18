<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('s_id');
            $table->unsignedBigInteger('s_product');
            $table->unsignedBigInteger('s_order');
            $table->float('s_total');

            $table->foreign('s_product')->references('prod_id')->on('products');
            $table->foreign('s_order')->references('o_id')->on('orders');
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
        Schema::dropIfExists('sales');
    }
};
