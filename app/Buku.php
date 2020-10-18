<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "buku";
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $casts = [
        'id' => 'string'
      ];

    public function status(){
        return $this->belongsTo("App\StatusBuku","idStatus");
    }

    public function kategori(){
        return $this->belongsToMany('App\KategoriBuku', 'detail_buku', 'idBuku', 'idKategori');
    }

    public function peminjaman(){
        return $this->hasMany('App\Peminjaman', 'idBuku');
    }
}
