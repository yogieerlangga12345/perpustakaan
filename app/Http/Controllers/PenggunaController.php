<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('pengguna.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat');
        $user->password = Hash::make($request->input('password'));
        $user->telp = $request->input('telp');
        $user->noIdentitas = $request->input('noIdentitas');
        $user->jenisIdentitas = $request->input('jenisIdentitas');
        $user->idRole = 2;
        $user->save();
        
        return redirect()->route('indexPengguna')->with('Data berhasil ditambahkan');
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
        $user = User::find($id);
        return view('pengguna.edit',compact('user','id'));
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
        $user = User::find($id);
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat');

        if($request->input('password') != "")
            $user->password = Hash::make($request->input('password'));

        $user->telp = $request->input('telp');
        $user->noIdentitas = $request->input('noIdentitas');
        $user->jenisIdentitas = $request->input('jenisIdentitas');
        $user->save();

        return redirect()->route('indexPengguna')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('indexPengguna')->with('success','Data berhasil dihapus');
    }
}
