<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnchangeRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
        */
        public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('to',4)->comment('moeda de origem');
            $table->string('from',4)->comment('moeda de destino');
            $table->double('value',5)->comment('taxa de conversao da moeda de origem para destino');
            $table->unsignedBigInteger('user_id')->comment('usuário que adicinou a taxa');

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('exchange_rates');
    }
}
