<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntermediateRequestsTable extends Migration{

    public function up(){
        Schema::create('intermediate_requests', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('card_id');
            $table->text('facial_photo');
            $table->text('id_card_photo');
            $table->integer('status')->default(0);
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('intermediate_requests');
    }
}
