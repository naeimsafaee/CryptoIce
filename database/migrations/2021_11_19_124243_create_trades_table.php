<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration {

    public function up() {
        Schema::create('trades', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coin_price_id');
            $table->unsignedBigInteger('trader_id');
            $table->integer('entry_price');
            $table->integer('exit_price');
            $table->integer('profit');
            $table->integer('risk');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('trades');
    }
}
