<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVEToClientsTable extends Migration {

    public function up() {
        Schema::table('clients', function(Blueprint $table) {
            $table->string('VE')->nullable();
        });
    }

    public function down() {
        Schema::table('clients', function(Blueprint $table) {
            //
        });
    }
}
