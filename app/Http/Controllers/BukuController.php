<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new Buku;
        $buku->id = $request->input('kode_buku');
        $buku->judul = $request->input('judul_buku');
        $buku->penerbit = $request->input('penerbit_buku');
        $buku->penulis = $request->input('penulis_buku');
        $buku->tahunTerbit = $request->input('tahun_terbit');
        $buku->idStatus = 1;
        $buku->save();

        return redirect()->route('indexBuku')->with('succes', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->judul = $request->input('judul_buku');
        $buku->penerbit = $request->input('penerbit_buku');
        $buku->penulis = $request->input('penulis_buku');
        $buku->tahunTerbit = $request->input('tahun_terbit');
        $buku->save();

        return redirect()->route('indexBuku')->with('succes', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return redirect()->route('indexBuku')->with('succes', 'Data berhasil dihapus');
    }
}
