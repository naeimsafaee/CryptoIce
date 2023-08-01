<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemsToRequestTradersTable extends Migration {

    public function up() {
        Schema::table('request_traders', function(Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email');
            $table->string('min_btc');
            $table->string('min_buy');
            $table->text('address');
        });
    }


    public function down() {
        Schema::table('request_traders', function(Blueprint $table) {
            //
        });
    }
}
