@php
$profil = getProfilData();
$layanan = getLayananData();
$senin = getFirstJadwalData('SENIN');
$selasa = getFirstJadwalData('SELASA');
$rabu = getFirstJadwalData('RABU');
$kamis = getFirstJadwalData('KAMIS');
$jumat = getFirstJadwalData('JUMAT');
@endphp
@extends('post.layout')

@section('content')

<section class="flex justify-center py-1">
    <img src="https://sintesanews.id/wp-content/uploads/2024/04/WhatsApp-Image-2022-07-16-at-14.29.32.jpeg" alt="foto rs dayaku raja" class=" md:w-[95rem] md:h-[40rem]" style="height: 27rem">
</section>
<section id="profil" class="flex flex-col py-28 gap-2 md:gap-10">
<h2 class="text-center text-2xl md:text-4xl font-semibold font-kanit">Profil</h2>
<div class="flex flex-col md:flex-row md:justify-between md:px-36 gap-1 md:gap-3 bg-green-600  shadow-md">
    <div class="flex justify-center items-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYWqQE5XMlFOlgjCaql-1gpG6moI096cjkFg&s" alt="foto rumah sakit" class="w-[35rem] h-[20rem] rounded-xl">
    </div>
    <div class="p-5">
        <article class="flex flex-col gap-2 text-center max-w-xl text-white font-roboto">
            <h4 class="text-xl md:text-3xl font-bold">{{ $profil->title }}</h4>
            <p class="text-base text-justify">{!! $profil->content !!}</p>
        </article>
        <div class="flex justify-center mt-3">
            <a href="{{ route('showProfil', $profil->id) }}">
                <button class="w-28 h-10 rounded-md border-2 border-white text-white hover:cursor-pointer hover:bg-white hover:text-green-600 hover:border-green-600">Selengkapnya</button>
            </a>
        </div>
    </div>
</div>
</section>
<section id="layanan" class="flex flex-col gap-10 py-28">
    <h2 class="text-center text-2xl md:text-4xl font-semibold font-kanit">Layanan</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 md:px-36 gap-2 md:gap-4 justify-items-center">
        @foreach($layanan as $data)
        <div class="w-full md:w-56 h-10 rounded-md shadow-md flex items-center justify-center hover:bg-green-600 hover:cursor-pointer hover:text-white">
            <a href="{{ route('show', $data->id) }}">{{ $data->title }}</a>
        </div>
        @endforeach
        
    </div>
</section>
<section class="flex flex-col gap-10 py-28">
<h2 class="text-center text-2xl md:text-4xl font-semibold font-kanit">Jadwal Dokter</h2>
<div class="flex flex-col md:flex-row justify-center gap-10 md:gap-3 pb-44">
    <div class="flex flex-col justify-center items-center gap-5 md:gap-3 text-center">
        <h5 class="text-lg md:text-xl font-semibold font-roboto">SENIN</h5>
        <div class="w-36 h-20 md:h-10rounded-md text-center">
            <img src="{{Storage::url($senin->foto)}}" alt="foto dokter" class="w-20 h-20 md:w-[12rem] md:h-[11rem]">
            <p>{{$senin->nama}}</p>
            <p>{{$senin->waktuAwal}} - {{$senin->waktuAkhir}}</p>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-5 md:gap-3 text-center">
        <h5 class="text-lg md:text-xl font-semibold font-roboto">SELASA</h5>
        <div class="w-36 h-20 md:h-10 rounded-md text-center">
            <img src="{{Storage::url($selasa->foto)}}" alt="foto dokter" class="w-20 h-20 md:w-[12rem] md:h-[11rem]">
            <p>{{$selasa->nama}}</p>
            <p>{{$selasa->waktuAwal}} - {{$selasa->waktuAkhir}}</p>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-5 md:gap-3 text-center">
        <h5 class="text-lg md:text-xl font-semibold font-roboto">RABU</h5>
        <div class="w-36 h-20 md:h-10 rounded-md text-center">
            <img src="{{Storage::url($rabu->foto)}}" alt="foto dokter" class="w-20 h-20 md:w-[12rem] md:h-[11rem]">
            <p>{{$rabu->nama}}</p>
            <p>{{$rabu->waktuAwal}} - {{$rabu->waktuAkhir}}</p>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-5 md:gap-3 text-center">
        <h5 class="text-lg md:text-xl font-semibold font-roboto">KAMIS</h5>
        <div class="w-36 h-20 md:h-10 rounded-md text-center">
            <img src="{{Storage::url($kamis->foto)}}" alt="foto dokter" class="w-20 h-20 md:w-[12rem] md:h-[11rem]">
            <p>{{$kamis->nama}}</p>
            <p>{{$kamis->waktuAwal}} - {{$kamis->waktuAkhir}}</p>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-5 gap-3 text-center">
        <h5 class="text-lg md:text-xl font-semibold font-roboto">JUMAT</h5>
        <div class="w-36 h-20 md:h-10 rounded-md text-center">
            <img src="{{Storage::url($jumat->foto)}}" alt="foto dokter" class="w-20 h-20 md:w-[12rem] md:h-[11rem]">
            <p>{{$jumat->nama}}</p>
            <p>{{$jumat->waktuAwal}} - {{$jumat->waktuAkhir}}</p>
        </div>
    </div>
</div>
<div class="flex justify-center">
    <a href="/jadwal">
    <p class="hover:cursor-pointer hover:text-green-600 hover:underline">Selengkapnya</p>
    </a>
</div>
</section>
@endsection