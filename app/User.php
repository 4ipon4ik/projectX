<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    function permissions(){
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }

    function hasRole(...$roles){
        foreach ($roles as $role){
            if($this->role->name === $role){
                return true;
            }
        }
        return false;
    }

    function hasPermission($permission){
        return $this->role->permissions->contains('name', $permission);
    }
}
