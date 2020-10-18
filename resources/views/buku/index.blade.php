@extends('index')

@section('title', 'Data Buku')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Buku</h2>
                        <div class="card-tools">
                            <a href="{{ route('createBuku') }}" class="btn btn-primary btn-sm float-right" type="button">
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
                                    <th style="width:10%">Status</th>
                                    <th style="width:10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($buku as $db)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $db->id }}</td>
                                        <td>{{ $db->judul }}</td>
                                        <td>{{ $db->penulis }}</td>
                                        <td>{{ $db->penerbit}}</td>
                                        <td>{{ $db->tahunTerbit}}</td>
                                        <td>{{ $db->status->namaStatus}}</td>
                                        <td>
                                            <div>
                                                <a href="{{ route('editBuku', ['id' => $db->id]) }}" class="btn btn-primary">Edit</a> | 
                                                <a href="#" class="btn btn-danger" onclick="confirm('Apakah anda ingin menghapus data ini?') ? document.querySelector('#deleteBuku{{$db->id}}').submit() : ''">Delete</a>
                                                <form action="{{ route('deleteBuku', ['id' => $db->id]) }}" id="deleteBuku{{$db->id}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                </form>
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
@endsection