<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsbukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msbuku', function (Blueprint $table) {
            $table->increments('bukuid');
            $table->char('kode_buku');
            $table->string('judul_buku');
            $table->string('penulis_buku');
            $table->string('penerbit_buku');
            $table->date('tahun_terbit');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msbuku');
    }
}
