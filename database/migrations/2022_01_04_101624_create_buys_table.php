<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration {

    public function up() {
        Schema::create('buys', function(Blueprint $table) {
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
        Schema::dropIfExists('buys');
    }
}
