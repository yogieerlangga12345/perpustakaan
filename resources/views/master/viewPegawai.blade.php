<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"><strong>Pegawai</strong></h1>
                        <div class="card-tools">
                            <a href="{{ asset('create') }}" class="btn btn-primary btn-sm float-right">
                                <span class="fa fa-plus"> Add</span>
                                {{-- Add --}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablePegawai" class="table table-bordered table-striped table-responsive dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($pegawai as $db)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $db->nama }}</td>
                                        <td>{{ $db->jabatan }}</td>
                                        <td>{{ $db->umur }}</td>
                                        <td>{{ $db->alamat}}</td>
                                        <td>
                                            <div>
                                                <a href="{{asset('edit/'.$db->id) }}">Edit</a> | 
                                                <a href="{{asset('delete/'.$db->id) }}">Delete</a>
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