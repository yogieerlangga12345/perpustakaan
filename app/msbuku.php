<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class msbuku extends Model
{
    protected $table = 'msbuku';
    protected $fillable = ['kode_buku', 'judul_buku', 'penulis_buku', 'penerbit_buku', 'tahun_penerbit', 'stok'];
    protected $primaryKey = 'bukuid';
}
