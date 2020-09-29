<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($pegawai as $data)
        <form action="{{ asset('edit/'.$data->id.'/proses') }}" method="post">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <label>Nama</label>
                <input type="text" name="nama" id="id" value="{{ $data->nama }}">
            </div>
            <div>
                <label>Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" value="{{ $data->jabatan }}">
            </div>
            <div>
                <label>Umur</label>
                <input type="number" name="umur" id="umur" value="{{ $data->umur }}">
            </div>
            <div>
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ $data->alamat }}">
            </div>

            <button type="submit" value="Simapan Data">Simpan</button>
        </form>
    @endforeach

</body>
</html>