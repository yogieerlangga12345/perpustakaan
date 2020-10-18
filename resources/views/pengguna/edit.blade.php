@extends('index')

@section('title', 'Tambah Data Pengguna')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('updatePengguna', ['id' => $id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"> Tambah Pengguna</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="buku">Nama</label>
                                    <input type="text" name="nama" id="nama" maxlength="50" class="form-control" value="{{ $user->nama }}" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group row col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" maxlength="70" class="form-control" value="{{ $user->email }}" placeholder="Masukkan Email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telp">Telp</label>
                                    <input type="text" maxlength="13" name="telp" id="telp" class="form-control" value="{{ $user->telp }}" placeholder="08xxxxxxxx" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="jenisIden">Jenis Identitas</label>
                                    <select name="jenisIdentitas" id="jenisIdentitas" class="form-control" required>
                                        <option value=""> -- Pilih Jenis Identitas -- </option>
                                        <option value="nisn" @if($user->jenisIdentitas == 'nisn') selected @endif>nisn</option>
                                        <option value="nik" @if($user->jenisIdentitas == 'nik') selected @endif>nik</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="jenisIden">Nomor Identitas</label>
                                    <input type="text" name="noIdentitas" id="noIdentitas" value="{{ $user->noIdentitas }}" placeholder="31413XXXXXXXXXXXXX" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" required>{{ $user->alamat }}</textarea>
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