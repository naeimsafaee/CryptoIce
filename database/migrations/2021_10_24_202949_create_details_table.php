<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration{

    public function up(){
        Schema::create('details', function(Blueprint $table){
            $table->id();
            $table->string('key');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('details');
    }
}
