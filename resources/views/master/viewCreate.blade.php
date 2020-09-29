<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ asset('/create/proses') }}" method="POST">
    
        {{ csrf_field() }}

        <div class="form-group">
            <label>Nama :</label>
            <input type="text" name="nama" id="nama">
        </div>

        <div>
            <label>Jabatan</label>
            <input type="text" name="jabatan" id="jabatan">
        </div>

        <div>
            <label>Umur</label>
            <input type="number" name="umur" id="umur">
        </div>

        <div class="form-group">
            <label>Alamat :</label>
            <input type="text" name="alamat" id="alamat">
        </div>

        <button type="submit" value="simpan">Simpan</button>

    </form>
</body>
</html>