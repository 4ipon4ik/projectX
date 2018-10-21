<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name'];

    function permissions(){
        return $this->belongsToMany(Permission::class, 'role_permissions_default')->withTimestamps();
    }

    function users(){
        return $this->hasMany(User::class);
    }
}
