<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index() {
        // mengambil data dari tabel pegawa
        $pegawai = DB::table('pegawai')->get();

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    // method untuk menampilkan form tambah pegawai
    public function tambah()
    {
        // menampilkan view form tambah pegawai
        return view('tambah');
    }

    public function store(Request $request)
    {
        // insert data ke tabel pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // passing data pegawai ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}