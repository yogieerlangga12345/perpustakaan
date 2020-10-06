<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Buku</h2>
                        <div class="card-tools">
                            <a href="{{ sprintf(asset('%s/%s'), $link, 'create') }}" class="btn btn-primary btn-sm float-right" type="button">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive datatable" id="tblbuku">
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
                                <?php $no = 1 ?>
                                @foreach ($data as $db)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $db->kode_buku }}</td>
                                        <td>{{ $db->judul_buku }}</td>
                                        <td>{{ $db->penulis_buku }}</td>
                                        <td>{{ $db->penerbit_buku}}</td>
                                        <td>{{ $db->tahun_penerbit}}</td>
                                        <td>{{ $db->stok}}</td>
                                        <td>
                                            <div>
                                                <a href="{{asset('master/buku/edit/'.$db->bukuid) }}" class="btn btn-primary">Edit</a> | 
                                                <a href="{{asset('master/buku/delete/'.$db->bukuid) }}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php $no ++ ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>