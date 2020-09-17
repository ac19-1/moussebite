<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->foreignId('transaction_id')->references('id')->on('transaction_headers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('mousse_id')->references('id')->on('mousses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('size_id')->references('id')->on('sizes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('quantity');
            $table->primary(['transaction_id','mousse_id','size_id']);
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
        Schema::dropIfExists('transaction_details');
    }
}
