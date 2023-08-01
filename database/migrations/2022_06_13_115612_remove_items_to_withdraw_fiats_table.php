<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveItemsToWithdrawFiatsTable extends Migration
{

    public function up()
    {
        Schema::table('withdraw_fiats', function (Blueprint $table) {
            $table->dropColumn('bank_name');
            $table->dropColumn('card_number');
        });
    }

    public function down()
    {
        Schema::table('withdraw_fiats', function (Blueprint $table) {
            //
        });
    }
}
