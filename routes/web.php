<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);

// route CRUD Tambah Pegawai
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);

// route CRUD Pegawai --> store
Route::post('/pegawai/store', [PegawaiController::class, 'store']);

// route CRUD Pegawai --> edit
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);

// route CRUD Pegawai --> update
Route::post('/pegawai/update', [PegawaiController::class, 'update']);