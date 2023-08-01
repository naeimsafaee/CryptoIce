<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradersTable extends Migration {

    public function up() {

        Schema::create('traders', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->integer('percent')->default(100);
            $table->string('description');
            $table->integer('price')->default(0);
            $table->double('average_profit');
            $table->double('average_loss');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('traders');
    }
}
