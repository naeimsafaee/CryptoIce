<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNetworkIdToClientTransactionsTable extends Migration {

    public function up() {
        Schema::table('client_transactions', function(Blueprint $table) {
            $table->unsignedBigInteger('network_id')->nullable();
        });
    }

    public function down() {
        Schema::table('client_transactions', function(Blueprint $table) {
            //
        });
    }
}
