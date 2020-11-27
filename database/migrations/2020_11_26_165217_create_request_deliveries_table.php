<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_deliveries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('requester_user_id');
            $table->foreign('request_user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade')->index();
            $table->bigInteger('request_to_user_id');
            $table->foreign('request_to_user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_deliveries');
    }
}
