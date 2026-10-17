<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Daftar URL (Route) Aplikasi
|--------------------------------------------------------------------------
| File ini "peta" alamat website. Tiap alamat menunjuk ke satu
| tampilan (view) di folder resources/views/.
|
| Contoh: ketik http://127.0.0.1:8000/  →  membuka welcome.blade.php
|--------------------------------------------------------------------------
*/

// Halaman utama / landing page
Route::get('/', function () {
    return view('welcome');
})->name('beranda');
