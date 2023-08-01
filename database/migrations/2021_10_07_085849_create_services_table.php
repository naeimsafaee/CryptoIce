<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration{

    public function up(){
        Schema::create('services', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('link')->nullable();
            $table->text('image')->nullable();
            $table->boolean('show_in_header')->default(false);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('services');
    }
}
