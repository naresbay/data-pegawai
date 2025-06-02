<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Konfirmasi Hapus Pegawai</title>
</head>
<body>
  <h3>Konfirmasi Hapus Data Pegawai</h3>

  <p>Apakah Anda yakin ingin menghapus data pegawai berikut?</p>

  <ul>
    <li><strong>Nama:</strong> {{ $pegawai->pegawai_nama }}</li>
    <li><strong>Jabatan:</strong> {{ $pegawai->pegawai_jabatan }}</li>
    <li><strong>Umur:</strong> {{ $pegawai->pegawai_umur }}</li>
    <li><strong>Alamat:</strong> {{ $pegawai->pegawai_alamat }}</li>
  </ul>

  <form action="/pegawai/destroy" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}" />
    <button type="submit">Konfirmasi Hapus</button>
    <a href="/pegawai">Batal</a>
  </form>
</body>
</html>
