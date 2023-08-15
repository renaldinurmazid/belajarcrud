<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\DashboardC;
use App\Http\Controllers\PesertaC;

Route::get('/', function () {
    return view('layout.content');
});

Route::get('/home', [HomeC::class, 'index']);

Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/kelas', function () {
    return view('pages/kelas');
});
Route::get('/siswa', function () {
    return view('pages/siswa');
});
Route::get('/guru', function () {
    return view('pages/guru');
});
Route::get('/admin', function () {
    return view('layout.content');
});
Route::get('/adminlte', function () {
    return view('adminlte.blank');
});
Route::get('/info', function () {
    return view('adminlte.info');
});
Route::get('/dashboard1', function () {
    return view('adminlte.dashboard1');
});

Route::get('/dashboard', [DashboardC::class, 'index']);
Route::get('/peserta', [PesertaC::class, 'index'])->name('peserta.index');
Route::get('/peserta/create', [PesertaC::class, 'create'])->name('peserta.create');
Route::post('/peserta/store', [PesertaC::class, 'store'])->name('peserta.store');
Route::delete('/peserta/{id}', [PesertaC::class, 'destroy'])->name('peserta.destroy');
Route::get('/peserta/{id}/edit', [PesertaC::class, 'edit'])->name('peserta.edit');
Route::put('/peserta/{id}', [PesertaC::class, 'update'])->name('peserta.update');



