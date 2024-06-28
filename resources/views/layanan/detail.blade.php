@extends('post.layout')

@section('content')

<section class="flex flex-col gap-5 py-10">
    <h1 class="text-2xl md:text-4xl font-light text-center">{{$detail->title}}</h1>
    <hr class="border-1 border-black">
    <div class="flex flex-col gap-2 md:px-10">
        <p class="text-sm">{!! $detail->description !!}</p>
    </div>
</section>

@endsection