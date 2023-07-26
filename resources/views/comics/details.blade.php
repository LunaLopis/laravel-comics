@extends('layouts.app')

@section('content')

<div>
    <h1 class="text-primary">{{$comic['title']}}</h1>
    <h3>{{$comic['type']}}</h3>
    <h3>{{$comic['description']}}</h3>
    <h3>{{$comic['price']}}</h3>
    <div class="d-flex">
        <h2>art by:</h2>
        @foreach($comic['artists'] as $key => $artist)
        <span> {{$artist}},</span>
        @endforeach
    </div>
    <div class="d-flex">
        <h2>written by:</h2>
        @foreach($comic['writers'] as $key => $writer)
        <span> {{$writer}},</span>
        @endforeach
    </div>

</div>

@endsection