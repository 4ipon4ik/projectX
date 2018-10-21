<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->float('rating',2,1)->nullable();
            $table->date('releasedate');
            $table->string('cover');
            $table->unsignedInteger('developer_id');
            $table->foreign('developer_id')->references('id')->on('developer')->onDelete('cascade')->onUpdate('cascade');
            $table->string('steamlink');
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
        Schema::dropIfExists('games');
    }
}
