<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    function game(){
        return $this->belongsToMany(Game::class,'game_category')->withTimestamps();
    }
}
