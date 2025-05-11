<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);