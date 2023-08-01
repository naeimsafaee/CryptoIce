<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthToClientsTable extends Migration{

    public function up(){
        Schema::table('clients', function(Blueprint $table){
            $table->boolean('sms_auth')->default(false)->after('password');
            $table->boolean('email_auth')->default(false)->after('sms_auth');

            $table->string('sms_auth_reset_link')->default(false)->after('reset_link');
            $table->string('email_auth_reset_link')->default(false)->after('sms_auth_reset_link');

        });
    }

    public function down(){
        Schema::table('clients', function(Blueprint $table){
            //
        });
    }
}
