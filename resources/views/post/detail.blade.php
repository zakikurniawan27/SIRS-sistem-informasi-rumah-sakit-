@extends('post.layout')

@section('content')

<section class="flex flex-col px-36 py-10 gap-1">
    <h1 class="text-4xl font-medium">{{$detail->title}}</h1>
    <h6 class="text-gray-600 text-sm">{{$detail->author}}</h6>
    <p class="text-justify">{!! $detail->description !!}</p>
</section>

@endsection