@extends('index')

@section('title', 'Data Kategori')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Kategori</h2>
                        <div class="card-tools">
                            <a href="{{ route('createKategori') }}" class="btn btn-primary btn-sm float-right" type="button">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive datatable" id="tblbuku">
                            <thead>
                                <tr>
                                    <th style="width:5%">No</th>
                                    <th style="width:75%">Nama</th>
                                    <th style="width:15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($data as $db)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $db->namaKategori }}</td>
                                        <td>
                                            <div>
                                                <a href="{{ route('editKategori', ['id' => $db->id]) }}" class="btn btn-primary">Edit</a> | 
                                                <a href="#" class="btn btn-danger" onclick="confirm('Apakah anda ingin menghapus data ini?') ? document.querySelector('#deleteKategori{{$db->id}}').submit() : ''">Delete</a>
                                                <form action="{{ route('deleteKategori', ['id' => $db->id]) }}" id="deleteKategori{{$db->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
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