<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientCoinsTable extends Migration {

    public function up() {
        Schema::create('client_coins', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coin_id');
            $table->unsignedBigInteger('client_id');
            $table->string('amount');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('client_coins');
    }
}
