<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController as post;
use App\Http\Controllers\LayananController as layanan;

Route::get('/', function () {
    return view('post.home');
});

Route::get('/profil/{id}', [post::class, 'showProfil'])->name('showProfil');

Route::get('/layanan', [layanan::class, 'indexLayanan'])->name('indexLayanan');
Route::get('/layanan/detail/{id}', [layanan::class, 'show'])->name('show');

Route::get('/jadwal', function () {
    return view('jadwal.index');
});