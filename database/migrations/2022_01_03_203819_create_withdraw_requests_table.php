<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawRequestsTable extends Migration {

    public function up() {
        Schema::create('withdraw_requests', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->text('address');
            $table->text('tx_id');
            $table->unsignedBigInteger('transaction_id');
            $table->string('amount');
            $table->unsignedBigInteger('coin_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('withdraw_requests');
    }
}
