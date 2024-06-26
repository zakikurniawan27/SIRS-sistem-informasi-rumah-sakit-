<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController as post;
use App\Http\Controllers\LayananController as layanan;

Route::get('/', [post::class, 'index'])->name('index');

Route::get('/detail/{id}', [layanan::class, 'show'])->name('show');