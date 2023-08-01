<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration{

    public function up(){
        Schema::create('clients', function(Blueprint $table){
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->text('avatar')->nullable();
            $table->string('wallet')->default(0);
            $table->boolean('is_trader')->default(false);
            $table->text('password');
            $table->string('reset_link')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verify_at')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('clients');
    }
}
