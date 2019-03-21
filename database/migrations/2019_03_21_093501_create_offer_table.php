<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->increments('id_offer');
            
			$table->integer('id_us')->unsigned();
			$table->foreign('id_us')->references('id_u')->on('users');
			$table->integer('id_pr')->unsigned();
			$table->foreign('id_pr')->references('id_p')->on('product');
            $table->integer('price');
			$table->string('country',30);
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
        Schema::dropIfExists('offer');
    }
}
