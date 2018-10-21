<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = [
        'name',
        'description',
        'rating',
        'releasedate',
        'cover',
        'steamlink'
    ];

    function developer(){
        return $this->belongsTo(Developer::class,'developer_id');
    }

    function platform(){
        return $this->belongsToMany(Platform::class,'game_platform')->withTimestamps();
    }

    function category(){
        return $this->belongsToMany(Category::class,'game_category')->withTimestamps();
    }
}
