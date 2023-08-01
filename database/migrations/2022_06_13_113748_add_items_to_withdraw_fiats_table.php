<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemsToWithdrawFiatsTable extends Migration {

    public function up() {
        Schema::table('withdraw_fiats', function(Blueprint $table) {
            $table->string('selected_type');
            $table->string('fullname');
            $table->string('bic_code')->nullable();
            $table->string('iban_account_number')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('post_code')->nullable();
            $table->string('ach_routing')->nullable();
            $table->string('account_number')->nullable();
        });
    }

    public function down() {
        Schema::table('withdraw_fiats', function(Blueprint $table) {
            //
        });
    }
}
