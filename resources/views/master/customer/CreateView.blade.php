<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ sprintf(asset('%s/%s/%s'), $link,'create', 'proses') }}" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"> Add Customer</h2>
                        </div>
                        <div class="card-body">
                            
                            <div class="form-group row">
                                <label for="alamat">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                            </div>
                            
                            <div class="form-group row">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Masukkan Alamat"></textarea>
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