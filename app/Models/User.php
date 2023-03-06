<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    public function hasRole($role){
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    // public function roles(){
    //     return $this->belongsToMany(Role::class, 'role_user');
    // }


    public function hasPermission($permission_nom){
        foreach( $this->getPermissionsViaRoles() as $permission){
            if( $permission->name == $permission_nom ) return true;
        }
        if(auth()->user()->permissions->pluck('name')->contains($permission_nom)) {
            return true;
        } else {
            return false;
        }
    }


}
