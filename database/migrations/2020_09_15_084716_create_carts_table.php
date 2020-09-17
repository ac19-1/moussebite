<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('mousse_id')->references('id')->on('mousses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('size_id')->references('id')->on('sizes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('quantity');
            $table->primary(['user_id','mousse_id','size_id']);
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
        Schema::dropIfExists('carts');
    }
}
