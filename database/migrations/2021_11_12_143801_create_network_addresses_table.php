<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworkAddressesTable extends Migration {

    public function up() {
        Schema::create('network_addresses', function(Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('network_id');
            $table->unsignedBigInteger('coin_price_id');
            $table->string('balance')->nullable();
            $table->text('contract_address')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('network_addresses');
    }
}
