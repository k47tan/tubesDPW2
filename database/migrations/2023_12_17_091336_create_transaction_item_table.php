<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item_transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id')->constrained();
            $table->unsignedBigInteger('product_id')->constrained();
            $table->decimal('amountItem');
            $table->decimal('priceItem');
            $table->timestamps();
            $table->foreign('transaction_id')->references('id')->on('transaction');
            $table->foreign('product_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactionItem');
    }
};
