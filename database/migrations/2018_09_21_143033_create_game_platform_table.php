<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamePlatformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_platform', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('platform_id');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['game_id','platform_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_platform');
    }
}
