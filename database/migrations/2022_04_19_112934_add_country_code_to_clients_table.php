<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryCodeToClientsTable extends Migration {

    public function up() {
        Schema::table('clients', function(Blueprint $table) {
            $table->string('country_code')->default("98")->nullable();
        });
    }

    public function down() {
        Schema::table('clients', function(Blueprint $table) {
            //
        });
    }
}
