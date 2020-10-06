<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\msbuku;

class CustomerController extends Controller
{
    protected $file = 'master/customer';
    protected $link = 'master/buku';

    public function getView($parm = null)
    {
        return is_null($parm) ? $this->file : sprintf('%s/%s', $this->file, $parm);
    }

    public function index()
    {
        $data = [];
        $data['link'] = $this->link;
        $data['content'] = $this->getView('CustomerView');
        $data['script_footer'] = $this->getView('scriptfooter');
        $data['data'] = msbuku::all();

        return view('index', $data);
    }

    public function viewCreate()
    {
        $data = [];
        $data['link'] = $this->link;
        $data['content'] = $this->getView('CreateView');
        $data['script_footer'] = $this->getView('scriptfooter');

        return view('index', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required'
        ]);

        $buku = new msbuku([
            'kode_buku' => $request->get('kode_buku'),
            'judul_buku' => $request->get('judul_buku'),
            'penulis_buku' => $request->get('penulis_buku'),
            'penerbit_buku' => $request->get('penerbit_buku'),
            'tahun_penerbit' => $request->get('tahun_terbit'),
            'stok' => $request->get('stok'),
        ]);

        $buku->save();
        return redirect('/master/buku')->with('success', 'Buku has been added');
    }

    public function edit($bukuid)
    {
        $data = [];
        $data['link'] = $this->link;
        $data['content'] = $this->getView('EditView');
        $data['script_footer'] = $this->getView('scriptfooter');
        $data['buku'] = msbuku::find($bukuid);


        return view('index', $data);
    }

    public function update($bukuid, Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required'
        ]);

        $buku = msbuku::where('bukuid', '=', $bukuid)->firstOrFail();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->penulis_buku = $request->penulis_buku;
        $buku->penerbit_buku = $request->penerbit_buku;
        $buku->tahun_penerbit = $request->tahun_terbit;
        $buku->stok = $request->stok;
        $buku->save();
        return redirect('/master/buku');
    }

    public function delete($id)
    {
        $buku = msbuku::find($id);
        $buku->delete();
        return redirect('/master/buku');
    }
}
