@extends('post.layout')

@section('content')

<section class="flex flex-col gap-7 py-14">
    <h1 class="text-4xl font-semibold font-roboto text-center">Layanan</h1>
    <div class="grid grid-cols-3 justify-items-center gap-4">
        @foreach($layanans as $layanan)
        <div class="w-56 h-10 rounded-md shadow-md flex items-center justify-center hover:bg-green-600 hover:cursor-pointer hover:text-white">
            <a href="{{ route('show', $layanan->id) }}">{{$layanan->title}}</a>
        </div>
        @endforeach
    </div>

    </div>
</section>

@endsection