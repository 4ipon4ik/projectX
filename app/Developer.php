<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $table = "developers";

    protected $fillable = ['name'];

    function game(){
        return $this->hasMany(Game::class,'developer_id');
    }
}
