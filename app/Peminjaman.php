<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = "peminjaman";
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User', 'idUser')
    }

    public function buku(){
        return $this->belongsTo('App\Buku','idBuku');
    }
}
