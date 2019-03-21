<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id_order');
			$table->integer('id_sell');
			$table->foreign('id_sell')->references('id')->on('users');
			$table->integer('id_buy');
			$table->foreign('id_buy')->references('id_p')->on('users');
			$table->integer('prod_id');
			$table->foreign('prod_id')->references('id_p')->on('product');
            $table->integer('price');
			$table->foreign('price')->references('price')->on('offer');
			$table->integer('amount');
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
        Schema::dropIfExists('order');
    }
}
