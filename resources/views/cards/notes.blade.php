@extends('layout')

@section('title')
    Cards
@endsection

@section('content')
    <h1>This is the Cards Page</h1>
    <ul>
    @foreach($notes as $note)
        <li>{{$note->id}}: {{$note->body}} <strong>Related Card: {{$note->card_id}}</strong></li>
    @endforeach
    </ul>
@endsection
