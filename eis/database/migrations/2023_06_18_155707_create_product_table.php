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
        Schema::create('product', function (Blueprint $table) {
            $table->id('prod_id');
            $table->string('prod_code', 200)->nullable();
            $table->string('prod_name', 200);
            $table->string('prod_image', 200)->nullable();
            $table->unsignedBigInteger('prod_ctg');
            $table->text('prod_desc')->nullable();
            $table->float('prod_price');
            $table->float('prod_sellprice');
            $table->integer('prod_stock');
            $table->unsignedBigInteger('prod_supplierID');
            $table->integer('prod_status');
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
        Schema::dropIfExists('product');
    }
};
