@php
$hariSenin = getAllJadwalData('SENIN');
$hariSelasa = getAllJadwalData('SELASA');
$hariRabu = getAllJadwalData('RABU');
$hariKamis = getAllJadwalData('KAMIS');
$hariJumat = getAllJadwalData('JUMAT');
@endphp
@extends('post.layout')

@section('content')

<section class="flex flex-col gap-5 py-10 items-center">
    <h1 class ="font-roboto text-4xl font-semibold text-center">Jadwal Dokter</h1>
    <div class="flex md:flex-row flex-col gap-5 py-5">
        <div class="flex flex-col justify-center text-center gap-5">
            <h5 class="text-xl font-semibold font-roboto">SENIN</h5>
            @foreach($hariSenin as $data)
            <div class="flex flex-col gap-1">
                <img src="{{ Storage::url($data->foto) }}" alt="foto dokter" class="w-[12rem] h-[11rem]">
                <p class="">{{ $data->nama }}</p>
                <p>{{ $data->waktuAwal }} - {{ $data->waktuAkhir }}</p>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col justify-center text-center gap-5">
            <h5 class="text-xl font-semibold font-roboto">SELASA</h5>
            @foreach($hariSelasa as $data)
            <div class="flex flex-col gap-1">
                <img src="{{ Storage::url($data->foto) }}" alt="foto dokter" class="w-[12rem] h-[11rem]">
                <p class="">{{ $data->nama }}</p>
                <p>{{ $data->waktuAwal }} - {{ $data->waktuAkhir }}</p>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col justify-center text-center gap-5">
            <h5 class="text-xl font-semibold font-roboto">Rabu</h5>
            @foreach($hariRabu as $data)
            <div class="flex flex-col gap-1">
                <img src="{{ Storage::url($data->foto) }}" alt="foto dokter" class="w-[12rem] h-[11rem]">
                <p class="">{{ $data->nama }}</p>
                <p>{{ $data->waktuAwal }} - {{ $data->waktuAkhir }}</p>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col justify-center text-center gap-5">
            <h5 class="text-xl font-semibold font-roboto">Kamis</h5>
            @foreach($hariKamis as $data)
            <div class="flex flex-col gap-1">
                <img src="{{ Storage::url($data->foto) }}" alt="foto dokter" class="w-[12rem] h-[11rem]">
                <p class="">{{ $data->nama }}</p>
                <p>{{ $data->waktuAwal }} - {{ $data->waktuAkhir }}</p>
            </div>
            @endforeach
        </div>
        <div class="flex flex-col justify-center text-center gap-5">
            <h5 class="text-xl font-semibold font-roboto">JUMAT</h5>
            @foreach($hariJumat as $data)
            <div class="flex flex-col gap-1">
                <img src="{{ Storage::url($data->foto) }}" alt="foto dokter" class="w-[12rem] h-[11rem]">
                <p class="">{{ $data->nama }}</p>
                <p>{{ $data->waktuAwal }} - {{ $data->waktuAkhir }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection