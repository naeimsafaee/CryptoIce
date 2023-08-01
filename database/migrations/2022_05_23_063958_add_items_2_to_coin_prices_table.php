<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItems2ToCoinPricesTable extends Migration {

    public function up() {
        Schema::table('coin_prices', function(Blueprint $table) {
            $table->string('tolerance')->default(1)->nullable();
        });
    }

    public function down() {
        Schema::table('coin_prices', function(Blueprint $table) {
            //
        });
    }
}
