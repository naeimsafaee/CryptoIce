<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSmsTable extends Migration
{

    public function up()
    {
        Schema::create('temp_sms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('phone');
            $table->string('VE');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('temp_sms');
    }
}
