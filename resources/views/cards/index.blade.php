@extends('layout')

@section('title')
    Cards
@endsection

@section('content')
    <h1>This is the Cards Page</h1>
    <ul>
    @foreach($cards as $card)
        <li><a href="/show/{{$card->id}}">{{$card->title}}</a></li>
    @endforeach
    </ul>
@endsection
