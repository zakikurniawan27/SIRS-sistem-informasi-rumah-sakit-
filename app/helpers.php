<?php

use App\Models\Jadwal;
use App\Models\Post;
use App\Models\Layanan;

function getAllJadwalData($key){
    $data= Jadwal::where('hari', $key)->get();
    return $data;
}

function getProfilData(){
    $data = Post::get()->first();
    return $data;
}

function getLayananData(){
    $data = Layanan::get();
    return $data;
}

function getFirstJadwalData($key){
    $data = Jadwal::where('hari', $key)->first();
    return $data;
}