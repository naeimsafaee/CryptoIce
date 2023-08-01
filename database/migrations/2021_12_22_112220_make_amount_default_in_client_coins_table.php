<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeAmountDefaultInClientCoinsTable extends Migration {

    public function up() {
        Schema::table('client_coins', function(Blueprint $table) {
            $table->string('amount')->default('0')->change();
        });
    }

    public function down() {
        Schema::table('client_coins', function(Blueprint $table) {
            //
        });
    }
}
