<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_category', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('category_id');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('game_category')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->unique(['game_id','category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_category');
    }
}
