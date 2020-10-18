<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    protected $table = "kategori_buku";
    public $timestamps = false;

    public function buku(){
        return $this->belongsToMany('App\Buku', 'detail_buku', 'idKategori', 'idBuku');
    }
}
