<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany(Role::class, 'user_roles');
    }
    public function isAdministrator(){
        return $this->roles()->where('name', 'admin')->exists();
    }
    public function isUser(){
        $user = $this->roles()->where('name', 'user')->exists();
        if($user) {
            return 'user';
        }
    }
    public function isDisabled(){
        $disabled = $this->roles()->where('name', 'disabled')->exists();
        if($disabled) {
            return 'disabled';
        }
    }
    public function isVisitor(){
        $user = $this->roles()->where('name', '')->exists();
        if($user) {
            return 'user';
        }
    }
}
