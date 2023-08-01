<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositRequestsTable extends Migration {

    public function up() {
        Schema::create('deposit_requests', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coin_price_id');
            $table->text('tx_id');
            $table->unsignedBigInteger('network_id');
            $table->unsignedBigInteger('client_id');
            $table->string('amount');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('deposit_requests');
    }
}
