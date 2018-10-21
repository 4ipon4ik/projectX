<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserReputationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reputation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fromUser');
            $table->unsignedInteger('toUser');
            $table->foreign('toUser')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fromUser')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('positive');
            $table->timestamps();
            $table->unique(['fromUser','toUser']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_reputation');
    }
}
