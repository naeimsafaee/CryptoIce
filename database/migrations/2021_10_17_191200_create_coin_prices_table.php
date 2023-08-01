<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinPricesTable extends Migration{

    public function up(){
        Schema::create('coin_prices', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('coin_id');
            $table->string('vs_currencies')->default('usd');
            $table->string('price')->nullable();
            $table->string('24_change')->nullable();
            $table->json('history')->nullable();
            $table->boolean('is_home')->default(false);
            $table->timestamps();

            $table->foreign('coin_id')->references('id')->on('coin_lists')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    public function down(){
        Schema::dropIfExists('coin_prices');
    }
}
