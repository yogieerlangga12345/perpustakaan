<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Customer</h2>
                        <div class="card-tools">
                            <a href="{{ sprintf(asset('%s/%s'), $link, 'create') }}" class="btn btn-primary btn-sm float-right" type="button">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive datatable">
                            <thead>
                                <tr>
                                    <th style="width:5%">No</th>
                                    <th style="width:10%">Kode</th>
                                    <th style="width:10%">Judul</th>
                                    <th style="width:10%">Penulis</th>
                                    <th style="width:10%">Penerbit</th>
                                    <th style="width:10%">Tahun Terbit</th>
                                    <th style="width:10%">Stok</th>
                                    <th style="width:10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>