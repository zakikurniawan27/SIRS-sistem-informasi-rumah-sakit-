<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController as post;


Route::get('/', [post::class, 'index'])->name('index');