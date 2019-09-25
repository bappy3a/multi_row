<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('orders_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('brand')->nullable();
            $table->string('quantity')->nullable();
            $table->string('budget')->nullable();
            $table->string('amount')->nullable();
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
        Schema::dropIfExists('itemes');
    }
}
