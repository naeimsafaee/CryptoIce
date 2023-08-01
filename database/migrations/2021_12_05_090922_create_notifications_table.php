<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration {

    public function up() {
        Schema::create('notifications', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->text('text');
            $table->integer('type')->default(0);
            $table->boolean('read')->default(false);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('notifications');
    }
}
