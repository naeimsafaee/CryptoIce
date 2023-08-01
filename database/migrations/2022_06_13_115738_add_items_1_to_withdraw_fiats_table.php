<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItems1ToWithdrawFiatsTable extends Migration
{

    public function up()
    {
        Schema::table('withdraw_fiats', function (Blueprint $table) {
            $table->boolean('is_pay')->default(false);
            $table->dateTime('pay_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('withdraw_fiats', function (Blueprint $table) {
            //
        });
    }
}
