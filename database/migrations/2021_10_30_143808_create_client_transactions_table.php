<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTransactionsTable extends Migration{

    public function up(){
        Schema::create('client_transactions', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('amount');
            $table->unsignedBigInteger('coin_id');
            $table->boolean('is_deposit')->default(false);
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('client_transactions');
    }
}
