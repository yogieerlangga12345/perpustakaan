<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
 
    public function role(){
        return $this->belongsTo('App\Role', 'idRole');
    }

    public function peminjaman(){
        return $this->hasMany('App\Peminjaman', 'idUser');
    }
}
