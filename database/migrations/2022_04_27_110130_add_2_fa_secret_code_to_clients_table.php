<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add2FaSecretCodeToClientsTable extends Migration {

    public function up() {
        Schema::table('clients', function(Blueprint $table) {
            $table->text('2fa_secret')->nullable();
            $table->boolean('2fa_auth')->default(false);
        });
    }

    public function down() {
        Schema::table('clients', function(Blueprint $table) {
            //
        });
    }
}
