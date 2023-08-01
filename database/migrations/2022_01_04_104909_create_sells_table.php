<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration {

    public function up() {
        Schema::create('sells', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coin_price_id');
            $table->text('address');
            $table->string('amount');
            $table->integer('status')->default(0);
            $table->text('tx_id')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('sells');
    }
}
