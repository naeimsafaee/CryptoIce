<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemAddressesTable extends Migration {

    public function up() {
        Schema::create('system_addresses', function(Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->unsignedBigInteger('network_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('system_addresses');
    }
}
