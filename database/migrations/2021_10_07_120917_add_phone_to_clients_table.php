<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToClientsTable extends Migration{

    public function up(){
        Schema::table('clients', function(Blueprint $table){
            $table->string('phone')->nullable()->unique()->after('email');
        });
    }

    public function down(){
        Schema::table('clients', function(Blueprint $table){
            //
        });
    }
}
