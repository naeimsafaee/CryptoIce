<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {

    public function up() {
        Schema::create('orders', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('coin_id');
            $table->string('amount');
            $table->string('price');
            $table->string('paid_amount');
            $table->boolean('is_buy')->default(true);
            $table->boolean('has_filled')->default(false);
            $table->boolean('has_canceled')->default(false);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('orders');
    }
}
