<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTxIdToClientTransactionsTable extends Migration
{

    public function up()
    {
        Schema::table('client_transactions', function (Blueprint $table) {
            $table->text('tx_id')->nullable();
        });
    }


    public function down()
    {
        Schema::table('client_transactions', function (Blueprint $table) {
            //
        });
    }
}
