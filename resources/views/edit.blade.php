<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial Membuat CRUD Pada Laravel - www.usm.ac.id</title>
</head>
<body>
  <h2><a href="https://www.usm.ac.id">www.usm.ac.id</a></h2>
  <h3>Edit Pegawai</h3>

  <a href="/pegawai">Kembali</a>

  <br>
  <br>

  @foreach($pegawai as $p)
  <form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
    <br>

    Nama <input type="text" name="nama" required="required" value="{{ $p->pegawai_nama }}"> <br>
    Jabatan <input type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}"> <br>
    Umur <input type="number" name="umur" required="required" value="{{ $p->pegawai_umur }}"> <br>
    Alamat <textarea name="alamat" required="required">{{$p->pegawai_alamat}}</textarea> <br>
    <input type="submit" value="Simpan Data">
  </form>
  @endforeach
</body>
</html>