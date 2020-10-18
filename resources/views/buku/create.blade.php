@extends('index')

@section('title', 'Tambah Data Buku')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('storeBuku') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"> Add Buku</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="buku">Kode Buku</label>
                                    <input type="text" name="kode_buku" id="kode_buku" maxlength="11" class="form-control" placeholder="Masukkan Kode Buku" required>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="alamat">Judul Buku</label>
                                    <input name="judul_buku" id="judul_buku" cols="30" rows="10" maxlength="200" class="form-control" placeholder="Masukkan Judul Buku" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="buku">Penulis Buku</label>
                                    <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" maxlength="50" placeholder="Masukkan Penulis Buku" required>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="alamat">Penerbit Buku</label>
                                    <input name="penerbit_buku" id="penerbit_buku" cols="30" rows="10" maxlength="100" class="form-control" placeholder="Masukkan Penerbit Buku" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="buku">Tahun Terbit</label>
                                    <input type="text" maxlength="4" name="tahun_terbit" id="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-right">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection