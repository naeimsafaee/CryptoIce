<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvanceRequestsTable extends Migration{

    public function up(){
        Schema::create('advance_requests', function(Blueprint $table){
            $table->id();
            $table->text('address')->nullable();
            $table->text('proof_address')->nullable();

            $table->text('zip_code')->nullable();

            $table->text('business_name')->nullable();
            $table->text('email')->nullable();
            $table->text('business_mailing_address')->nullable();

            $table->boolean('is_natural')->default(true);

            $table->integer('status')->default(0);
            $table->text('message')->nullable();

            $table->unsignedBigInteger('client_id');

            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('advance_requests');
    }
}
