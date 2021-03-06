<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ sprintf(asset('%s/%s/%s'), $link,'create', 'proses') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"> Add Buku</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="buku">Kode Buku</label>
                                    <input type="text" name="kode_buku" id="kode_buku" class="form-control" placeholder="Masukkan Kode Buku">
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="alamat">Judul Buku</label>
                                    <input name="judul_buku" id="judul_buku" cols="30" rows="10" class="form-control" placeholder="Masukkan Judul Buku">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="buku">Penulis Buku</label>
                                    <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" placeholder="Masukkan Penulis Buku">
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="alamat">Penerbit Buku</label>
                                    <input name="penerbit_buku" id="penerbit_buku" cols="30" rows="10" class="form-control" placeholder="Masukkan Penerbit Buku">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="buku">Tahun Terbit</label>
                                    <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit">
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="alamat">Stok</label>
                                    <input name="stok" id="stok" cols="30" rows="10" class="form-control" placeholder="Masukkan Humlah Stok">
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