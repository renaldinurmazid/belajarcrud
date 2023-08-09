<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\DashboardC;
use App\Http\Controllers\PesertaC;

Route::get('/', function () {
    return view('pages/home');
});
// Route::get('/home', function () {
//     return view('pages/home');
// });
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
Route::get('/blank', function () {
    return view('pages.blank');
});

Route::get('/dashboard', [DashboardC::class, 'index']);
Route::get('/peserta', [PesertaC::class, 'index']);


