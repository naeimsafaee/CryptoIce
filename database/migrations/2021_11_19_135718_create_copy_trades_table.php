<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyTradesTable extends Migration {

    public function up() {
        Schema::create('copy_trades', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trader_id');
            $table->unsignedBigInteger('client_id');
            $table->string('api_key');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('copy_trades');
    }
}
