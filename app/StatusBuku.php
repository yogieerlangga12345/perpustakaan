<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusBuku extends Model
{
    protected $table = "status_buku";
    public $timestamps = false;

    public function buku(){
        return $this->hasMany("App\Buku","idStatus");
    }
}
