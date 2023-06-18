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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('oItem_id');
            $table->unsignedBigInteger('oItem_orderId');
            $table->unsignedBigInteger('oItem_product');
            $table->string('oItem_purchaseOrder', 30)->nullable();
            $table->string('oItem_project', 50)->default('None');
            $table->integer('oItem_qty');
            $table->string('oItem_uom', 15)->nullable();
            $table->float('oItem_totalprice');
            $table->timestamps();

            $table->foreign('oItem_orderId')->references('o_id')->on('orders');
            $table->foreign('oItem_product')->references('prod_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item');
    }
};
