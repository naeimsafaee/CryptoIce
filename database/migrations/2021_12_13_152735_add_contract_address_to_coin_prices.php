<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContractAddressToCoinPrices extends Migration {

    public function up() {
        Schema::table('coin_prices', function(Blueprint $table) {
            $table->text('contract_address')->nullable()->after('is_home');
        });
    }

    public function down() {
        Schema::table('coin_prices', function(Blueprint $table) {

        });
    }
}
