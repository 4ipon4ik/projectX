<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $table = "platforms";

    protected $fillable = ['name'];

    function game(){
        return $this->belongsToMany(Game::class,'game_platform')->withTimestamps();
    }
}
