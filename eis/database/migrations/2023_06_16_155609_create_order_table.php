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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('o_id');
            $table->unsignedBigInteger('o_cust');
            $table->dateTime('o_dateIssued')->nullable();
            $table->string('o_deliveryOrder', 15)->nullable();
            $table->string('o_jobOrder', 15)->nullable();
            $table->string('o_salesOrder', 15)->nullable();
            $table->string('o_terms', 10)->default('Bank');
            $table->float('o_totalAmount')->nullable();
            $table->float('o_tax')->default(0);
            $table->string('o_status', 50)->nullable();
            $table->float('o_rate')->default(1);
            $table->timestamps();

            $table->foreign('o_cust')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
