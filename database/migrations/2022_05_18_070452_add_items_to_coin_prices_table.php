<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemsToCoinPricesTable extends Migration {

    public function up() {

        Schema::table('coin_prices', function(Blueprint $table) {
            $table->string('fee')->default(0);
            $table->string('min_deposit')->default(0);
            $table->string('min_withdraw')->default(0);
        });

        Schema::table('coin_networks', function(Blueprint $table) {
            $table->string('fee')->default(0);
            $table->string('min_deposit')->default(0);
            $table->string('min_withdraw')->default(0);
        });
    }

    public function down() {
        Schema::table('coin_prices', function(Blueprint $table) {
            //
        });
    }
}
