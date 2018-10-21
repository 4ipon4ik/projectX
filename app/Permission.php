<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['name'];

    function roles(){
        return $this->belongsToMany(Role::class,'role_permissions_default')->withTimestamps();
    }

    function users(){
        return $this->belongsToMany(User::class, 'user_role')->withTimestamps();
    }
}
