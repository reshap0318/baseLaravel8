<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'no_hp',
        'avatar',
        'alamat',
        'isActive',
        'password',
        'email_verified_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\role', 'role_users', 'user_id', 'role_id')->withTimestamps();
    }  
    
    public function hasAccess($permissions)
    {
        if (is_string($permissions)) {
            $permissions = func_get_args();
        }


        foreach ($permissions as $permission) {
            if (! $this->checkPermission($permission)) {
                return false;
            }
        }

        return true;
    }

    public function hasAnyAccess($permissions)
    {
        if (is_string($permissions)) {
            $permissions = func_get_args();
        }

        foreach ($permissions as $permission) {
            if ($this->checkPermission($permission)) {
                return true;
            }
        }

        return false;
    }

    protected function checkPermission($permission)
    {
        $prepared = [];
        foreach ($this->roles as $role) {
            foreach($role->permissions as $key => $value){
                $prepared[$key]=$value;
            }
        }
        if (array_key_exists($permission, $prepared)) {
            return true;
        }

        return false;
    }

    public function inRole($role)
    {
        $roleId = $this->roles->pluck('id')->toArray();
        $roleName = $this->roles->pluck('name')->toArray();
        return (in_array($role,$roleId) || in_array($role,$roleName));
    }

}
