<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    Use HasApiTokens;
    protected $primaryKey ="idUser";
    public $timestamps = false;
    protected $fillable = [
        'nameUser', 'email', 'passwordUser',
    ];

 
    // public function services()
    // {
    //     return $this->hasMany('App\Services','idService','idService');
    // }
}
