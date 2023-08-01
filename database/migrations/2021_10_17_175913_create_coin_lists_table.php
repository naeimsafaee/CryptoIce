<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinListsTable extends Migration{

    public function up(){
        Schema::create('coin_lists', function(Blueprint $table){
            $table->id();
            $table->string('coin_name');
            $table->string('symbol');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('coin_lists');
    }
}
